<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
class KelasController extends Controller
{
    public function showKelas(){
        $kelas = Kelas::all();
        return view('pageAdmin.kelas',['kelas' => $kelas]);
    }
    public function create()
    {
        return view('forms.tambahKelas');
    }
    public function store(Request $request){
        $kelas = new Kelas();
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->kompotensi_keahlian = $request->kompotensi_keahlian;
        $kelas->save();
        return redirect('/kelas');
    }
    public function edit($id){
        $kelas = Kelas::find($id);
        return view('forms.kelas_edit', ['kelas' => $kelas]);
    }
    public function update($id, Request $request){
        $this->validate($request,[
        'nama_kelas' => 'required',
        'kompotensi_keahlian' => 'required'
        ]);
        $kelas = Kelas::find($id);
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->kompotensi_keahlian = $request->kompotensi_keahlian;
        $kelas->save();
        return redirect('/kelas');
    }
    public function delete($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('/kelas');
    }
}
