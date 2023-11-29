<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiLoginController extends Controller
{
    // halaman login
    public function loginApi()
    {
        return view('auth.login');
    }



    // dologin
    public function doLoginApi(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);
        $response = Http::post('http://localhost:8000/api/login', $request);
        return $response->json();
    }
}
