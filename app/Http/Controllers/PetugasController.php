<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function showPetugas(){

        $petugas = Auth::User()->where('level','petugas')->get();
        return view('pageAdmin.petugas',['petugas' => $petugas]);
    }
}
