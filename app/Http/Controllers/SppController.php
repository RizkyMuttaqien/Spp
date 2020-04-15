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
        $this->validate($request,[
            'nominal' => 'required',
            'tahun' => 'required'
            ]);

        $spp = new Spp();
        $spp->nominal = $request->nominal;
        $spp->tahun = $request->tahun;
        $spp->save();
        return redirect('/spp');
    }
    public function edit($id){
        $spp = Spp::find($id);
        return view('forms.spp_edit', ['spp' => $spp]);
    }
    public function update($id, Request $request){
        $this->validate($request,[
        'nominal' => 'required',
        'tahun' => 'required'
        ]);
        $spp = Spp::find($id);
        $spp->nominal = $request->nominal;
        $spp->tahun = $request->tahun;
        $spp->save();
        return redirect('/spp');
    }
    public function delete($id)
    {
        $spp = Spp::find($id);
        $spp->delete();
        return redirect('/spp');
    }
}
