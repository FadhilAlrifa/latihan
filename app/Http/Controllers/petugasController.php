<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugasController extends Controller
{
    public function petugas(){
        return view('petugas.petugas',[
            'title'=>'halaman petugas'
        ]);
    }
}
