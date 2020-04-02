<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spp;
class SppController extends Controller
{
    public function showSpp(){
        $spp = Spp::all();
        return view('pageAdmin.spp',['spp' => $spp]);
    }
    public function create()
    {
        return view('forms.tambahSpp');
    }
    public function store(Request $request){
        $spp = new Spp();
        $spp->nominal = $request->nominal;
        $spp->tahun = $request->tahun;
        $spp->save();
        return redirect('/spp');
    }
}
