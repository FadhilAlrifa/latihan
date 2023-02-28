<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login',[
            'title'=>'Halaman Login',
        ]);
    }

    public function login(Request $request){

    $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required']
    ]);

    if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        if (auth()->user()->level == 'admin') {
            return redirect()->intended('laporan');

        }elseif (auth()->user()->level == 'petugas') {
            return redirect()->intended('petugas');

        }elseif (auth()->user()->level == 'masyarakat') {
            return redirect()->intended('/home');

        }
        else{

        redirect('/');
    }
    }

    return back()->with('gagal', 'Email / Password anda Salah');
}
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
