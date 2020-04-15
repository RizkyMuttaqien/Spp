<?php

namespace App\Http\Controllers;
use App\Siswa;
Use \Carbon\Carbon;
use App\Pembayaran;
use App\Kelas;
use App\Spp;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function showSiswa(){
        $siswa = Siswa::orderBy('nis','ASC')
        ->join("spp","siswa.id_spp","=","spp.id_spp")
        ->join("kelas","kelas.id_kelas","=","siswa.id_kelas")
        ->get();
        return view('pageAdmin.siswa',['siswa' => $siswa]);
    }
    public function create()
    {
        $kelas = Kelas::all();
        $spp = SPP::all();
        return view('forms.tambahSiswa',['kelas' => $kelas],['spp'=>$spp]);
    }
    public function store(Request $request){
        $siswa = new Siswa();
        $siswa->nisn = $request->nisn;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->alamat = $request->alamat;
        $siswa->no_telp = $request->no_telp;
        $siswa->id_spp = $request->id_spp;
        $siswa->save();

        $array1 = ["juli","agustus","september","oktober","november","desember","januari","februari","maret","April","mei","juni"];
        $now = Carbon::now()->format('Y');
        $nextYear = $now + 1;
        $array2 = [$now,$now,$now,$now,$now,$now,$nextYear,$nextYear,$nextYear,$nextYear,$nextYear,$nextYear];

        for($i = 0 ; $i<12 ;$i++){
            $pembayaran = new Pembayaran();
            $pembayaran->id = "2";
            $pembayaran->nis = $request->nis;
            $pembayaran->tgl_bayar = "00";
            $pembayaran->bulan_dibayar = $array1[$i];
            $pembayaran->tahun_bayar = $array2[$i];
            $pembayaran->id_spp = $request->id_spp;
            $pembayaran->jumlah_bayar = "300000";
            $pembayaran->status = "belum dibayar";
            $pembayaran->save();
        };

        return redirect('/siswa');
    }
    public function search(Request $request){
        $cari = $request->cari;
        $siswa = Siswa::orderBy('nis','ASC')
        ->join("spp","siswa.id_spp","=","spp.id_spp")
        ->join("kelas","kelas.id_kelas","=","siswa.id_kelas")
        ->where("nis","like","%".$cari."%")
        ->orWhere("nisn","like","%".$cari."%")
        ->orWhere("nama","like","%".$cari."%")
        ->get();
        return view('pageAdmin.siswa',['siswa' => $siswa]);
    }
    public function ShowSpp($nis){
        $siswa = Siswa::orderBy('nis','ASC')
        ->join("spp","siswa.id_spp","=","spp.id_spp")
        ->join("kelas","kelas.id_kelas","=","siswa.id_kelas")
        ->where("nis","=",$nis)->get();
        $transaksi = Pembayaran::where("nis","=",$nis)->get();
        return view('pageAdmin.showSpp', ['siswa' => $siswa],['transaksi' =>$transaksi]);
    }
    public function edit($nis){
        $siswa = Siswa::find($nis);
        $kelas = Kelas::all();
        $spp = SPP::all();
        return view('forms.siswa_edit', ['siswa' => $siswa,'spp'=>$spp,'kelas' => $kelas]);
    }
    public function update($nis, Request $request){
        $this->validate($request,[
        'nisn' => 'required',
        'nis' => 'required',
        'nama' => 'required',
        'id_kelas' => 'required',
        'alamat' => 'required',
        'no_telp' => 'required',
        'id_spp' => 'required'
        ]);
        $siswa = Siswa::find($nis);
        $siswa->nisn = $request->nisn;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->alamat = $request->alamat;
        $siswa->no_telp = $request->no_telp;
        $siswa->id_spp = $request->id_spp;
        $siswa->save();
        return redirect('/siswa');
    }
    public function delete($nis)
    {

        $pembayaran = Pembayaran::where('nis','like',$nis);
        $pembayaran->delete();

        $siswa = Siswa::find($nis);
        $siswa->delete();


        return redirect('/siswa');
    }
}
