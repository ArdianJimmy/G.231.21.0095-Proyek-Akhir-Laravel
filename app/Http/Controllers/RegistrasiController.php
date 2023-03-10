<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegistrasiController extends Controller
{
    public function index(){
        return view('tampil-registrasi');
    }
    public function register(Request $request){
        $validatedData =$request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email:dns|unique:users',
            'role_id'=>'required|max:255',
            'position_id'=>'required|max:255',
            'phone'=>'required|max:255',
            'password'=>'min:6|required_with:konfirmasi_password|same:konfirmasi_password',
            'konfirmasi_password'=>'required|min:6',
        ]);
        $validatedData['password']=Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/')->with('status', 'Registrasi Berhasil');
    }
}
