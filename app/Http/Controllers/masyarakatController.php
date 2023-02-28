<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class masyarakatController extends Controller
{
    public function index(){
        return view('masyarakat.home',[
            'title'=>'halaman Masyarakat'
        ]);
    }
    public function pengaduan(){
        return view('petugas.petugas',[
            'title'=>'lamana masyarakat'
        ]);
    }
}
