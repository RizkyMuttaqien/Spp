<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
Use \Carbon\Carbon;
use App\Siswa;
use App\Pembayaran;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::user()->level == "siswa"){

            $siswa = Siswa::orderBy('nis','ASC')
            ->join("spp","siswa.id_spp","=","spp.id_spp")
            ->join("kelas","kelas.id_kelas","=","siswa.id_kelas")
            ->Where("nama","like","%".Auth::user()->name."%")
            ->get();
            return view('pageUser.dashboard',['siswa' => $siswa]);

        }else{
        $rpl1 = Siswa::where('id_kelas','1')->count();
        $rpl2 = Siswa::where('id_kelas','2')->count();
        $rpl3 = Siswa::where('id_kelas','3')->count();
        $rpl = $rpl1 + $rpl2 + $rpl3;
        $mm = Siswa::where('id_kelas','4')->count();
        $tkj = Siswa::where('id_kelas','5')->count();
        $toi = Siswa::where('id_kelas','6')->count();
        $titl = Siswa::where('id_kelas','7')->count();
        $av = Siswa::where('id_kelas','8')->count();

        $tanggal = Carbon::now()->format('Y-m-d');
        $transaksi = Pembayaran::where("status","like","sudah dibayar")->where("tgl_bayar","like",$tanggal)->orderBy("tgl_bayar","ASC")->get();
        $petugas = Auth::User()->get();

        $transaksi1 = Pembayaran::where("status","like","sudah dibayar")->where("tgl_bayar","like",$tanggal)->orderBy("tgl_bayar","ASC")->count();

        $tahun = Carbon::now()->format('Y');
        $bulan = Carbon::now()->format('m');
        $skrg = Carbon::now()->format('d');
        $kemarin = $skrg - 1;
        $yesterday = "$tahun-$bulan-$kemarin";
        $transaksi2 = Pembayaran::where("status","like","sudah dibayar")->where("tgl_bayar","like",$yesterday)->orderBy("tgl_bayar","ASC")->count();

        $siswa = Siswa::all()->count();

        return view('home',['rpl' => $rpl,'tkj' => $tkj,'mm' => $mm ,'toi'=>$toi,'titl'=>$titl,'av'=>$av,'transaksi' =>$transaksi,'petugas'=>$petugas,'transaksi1'=>$transaksi1,
        'transaksi2'=>$transaksi2,'siswa'=>$siswa]);
        }
    }
}
