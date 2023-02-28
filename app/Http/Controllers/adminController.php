<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard',[
            'title'=>'Halaman Admin',
            'user'=>User::all()
        ]);
    }

    public function dashboard()
    {
        return view('admin.laporan',[

        ]);

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
        return view('admin.tambah',[
            'user'=>user::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $validatedData=$request->validate([

            'name'=>'required|min:2|max:255',
            'nik'=>'required',
            'tlp'=>'required',
            'username'=>'required|min:3|unique:users',
            'password'=> 'required|min:5',
            'level'=>'required'




        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        user::where('id', $id)->update($validatedData);
        return redirect('/dashboard');
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
    public function edit(User $id)
    {
        return view('admin.edit',[
            'user' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validatedData=$request->validate([

            'name'=>'required|min:2|max:255',
            'nik'=>'required',
            'tlp'=>'required',
            'username'=>'required',
            'level'=>'required'




        ]);
        user::where('id', $id)->update($validatedData);
        // User::create($validatedData);
        return redirect('/dashboard')->with('success','Data Telah diedit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $id)
    {
        User::destroy($id->id);
        return redirect('/dashboard');
    }
}
