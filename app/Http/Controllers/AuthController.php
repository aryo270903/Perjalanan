<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\str;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('name', 'email', 'password'))) {
            return redirect("/home");
        }
        return redirect("/login");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/login");
    }

    public function register()
    {
        return view('auths.register');
    }

    public function postregister(Request $request)
    {
        $password = $request->password;

        // $this->validate($request, [
        //     'nik' => 'required|max:16',
        //     'name' => 'required|min:4',
        //     'notlp' => 'required|max:12|max:12',
        //     'email' => 'required|min:4|email|unique:users',
        //     'alamat' => 'required',
        //     'password' => 'required',
            
        // ]);
        $user = new User;
        $user->nik = $request->nik;
        $user->name = $request->name;
        $user->notlp = $request->notlp;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->role = 'user';
        $user->password = bcrypt($password);
        $user->remember_token = str::random(60);
        $user->save();
        return redirect('/login')->with('alert-success', 'Anda berhasil register');
    }
}
