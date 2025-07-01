<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('reg-admin');
    }

    public function aksireg(Request $request)
    {
        $data_regist = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role'=>'required',
        ]);

        $data_regist['password'] = Hash::make($data_regist['password']);
        User::create($data_regist);
        session()->flash('berhasil', 'Registrasi User Berhasil');
        return redirect()->route('login');
    }
}
