<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
Use \Carbon\Carbon;
use Auth;
use PDF;
use App\Siswa;
class TransaksiController extends Controller
{
    public function showPembayaran(){
        $siswa = Siswa::orderBy('nis','ASC')
        ->join("spp","siswa.id_spp","=","spp.id_spp")
        ->join("kelas","kelas.id_kelas","=","siswa.id_kelas")
        ->where("nis","=","0")
        ->get();
        $transaksi = Pembayaran::where("nis","like","0")->get();
        return view('pageAdmin.pembayaran',['siswa' => $siswa],['transaksi' =>$transaksi]);
    }
    public function search(Request $request){
        $cari = $request->cari;
        $siswa = Siswa::orderBy('nis','ASC')
        ->join("spp","siswa.id_spp","=","spp.id_spp")
        ->join("kelas","kelas.id_kelas","=","siswa.id_kelas")
        ->where("nis","like","%".$cari."%")
        ->get();
        $transaksi = Pembayaran::where("nis","like","%".$cari."%")->get();
        return view('pageAdmin.pembayaran', ['siswa' => $siswa],['transaksi' =>$transaksi]);
    }
    public function bayar($id_pembayaran){
    $transaksi = Pembayaran::where("id_pembayaran",$id_pembayaran)->get();
    return view('forms.validasibayar',['transaksi' =>$transaksi]);
    }

    public function store(Request $request){
        $transaksi = Pembayaran::find($request->id_pembayaran);
        $transaksi->id  = $request->id;
        $now = Carbon::now()->format('Y-m-d');
        $transaksi->tgl_bayar  = $now;
        $transaksi->status  = $request->status;
        $transaksi->save();
        return redirect("/siswa/lihatSpp/$transaksi->nis");
    }
    public function showHistori(){
            $transaksi = Pembayaran::where("status","like","sudah dibayar")->orderBy("tgl_bayar","ASC")->get();
            $petugas = Auth::User()->get();
            return view('pageAdmin.histori',['transaksi' =>$transaksi],['petugas'=>$petugas]);
    }
    public function showHistoriSiswa($nis){
            $transaksi = Pembayaran::where("status","like","sudah dibayar")->where("nis","like",$nis)->orderBy("tgl_bayar","ASC")->get();
            $petugas = Auth::User()->get();
            return view('pageAdmin.histori',['transaksi' =>$transaksi],['petugas'=>$petugas]);
    }
    public function searchHistori(Request $request){
        $cari = $request->cari;
        $transaksi = Pembayaran::where("nis","like","%".$cari."%")->where("status",'=',"sudah dibayar")
        ->orderBy("tgl_bayar","ASC")->get();
        $petugas = Auth::User()->get();
        return view('pageAdmin.histori', ['petugas'=>$petugas],['transaksi' =>$transaksi]);
    }
    public function cetak_pdf(){
        $transaksi = Pembayaran::where("status","like","sudah dibayar")->orderBy("tgl_bayar","ASC")->get();
        $petugas = Auth::User()->get();
        $pdf = PDF::loadview('pageAdmin.transaksi_pdf',['transaksi'=>$transaksi],['petugas'=>$petugas]);
        return $pdf->stream('laporan-pembayaran.pdf');
    }
}
