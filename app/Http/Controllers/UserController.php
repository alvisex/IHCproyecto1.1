<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index () {
        return view('login');
    }

    public function validar(Request $request) {
        $username = $request->input('username');
        $pass = $request->input('pass');

        $userr= User::where('name', $username)->where('password',$pass)->first();

        if (!$userr){
            return 'Error';
        }
        session(['saludo' => $userr->name]);
        return $userr;
    }

    public function validarqr(Request $request) {
        $token = $request->input('token');

        $userr= User::where('token', $token)->first();

        if (!$userr){
            return 'Error';
        }
        session(['saludo' => $userr->name]);
        return $userr;
    }


}
