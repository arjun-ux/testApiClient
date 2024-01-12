<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getDataFormApi()
    {
        // $datas = Http::get('http://localhost:8000/api/category');
        // // dd($datas);
        // $jsonData = $datas->json();
        // return $jsonData;
    }

    // json dikirim ke home blade
    public function indexApi()
    {
        $jsonData = $this->getDataFormApi();
        return view('home', compact('jsonData'));
    }

    public function create()
    {
        return view('create');
    }
    public function storeData(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        // dd($dataToSend);
        // mengirim data client ke provider
        $dataSend = Http::post('http://localhost:8000/api/category', $request);
        // tangani denga respons json
        return redirect()->route('data');

    }

}
