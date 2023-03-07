<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profil(){
        return view('profil')
        ->with('name', 'Bima Putra Wicaksono')
        ->with('nama','Bima')
        ->with('nim','2141720255')
        ->with('kelas','2G')
        ->with('absen','08')
        ->with('prodi','D4-TI')
        ->with('jurusan','TI')
        ->with('univ','POLINEMA');
    }
}
