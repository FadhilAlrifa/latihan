<?php


namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index(){
        return view('/register',[
            'title'=>'Halaman Register',

        ]);
    }
    public function store(Request $request){


        $validatedData=$request->validate([

            'name'=>'required|min:2|max:255',
            'nik'=>'required',
            'tlp'=>'required',
            'username'=>'required|min:3|unique:users',
            'password'=> 'required|min:5',




        ]);
        // dd($request);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('login')->with('success','Register Berhasil! SIkahkan Login');
        // return $request->all();
        // dd('registreasi berhasil');
    }
    public function tambah(Request $request){
        $validatedData=$request->validate([
            'name'=>'required|min:5|max:255',
            'nik'=>'required',
            'tlp'=>'required|min:8|max:16',
            'username'=>'required|min:5|unique:users',
            'password'=> 'required|min:5',
            'level'=>'required'
        ]);

        // dd($validatedData);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/dashboard')->with('success','Register Berhasil! Data Telah ditambahkan');
    }
}
