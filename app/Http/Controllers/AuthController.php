<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar()
    {
        return view('form');
    }

    public function welcome(Request $request)
    {
        $data = $request->all();

        return view('welcome', ['data' => $data]);
    }
}
