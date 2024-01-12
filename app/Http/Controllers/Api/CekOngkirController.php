<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CekOngkirController extends Controller
{
    // index province
    public function indexProvince()
    {
        $key = env('API_KEY');
        $province = $this->get_province($key);
        // dd($province);
        if ($province) {
            return view('cekongkir.index', ['province' => $province ]);
        }else{
            return response()->json(['status' => 'failed', 'message'=>'Failed to load province']);
        }
    }
    // private function getProvinsi all
    private function get_province($key)
    {
        $client = new Client();
        try {
            $response = $client->get("https://api.rajaongkir.com/starter/province",[
                'headers' => [
                    "key" => $key,
                    ]
            ]);
            $response_data = json_decode($response->getBody(), true);
            // dd($response_data);
            if ($response_data['rajaongkir']['status']['code'] == 200) {
                return $response_data['rajaongkir']['results'];
            }else{
                return false;
            }
        } catch (\Throwable $e) {
            return false;
        }
    }
    // ambil data provinsi dari api berdasarkan id yang di input
    public function getIdprovince($id)
    {
        $key = env('API_KEY');
        $province = $this->get_province_id($key, $id);
        return response()->json($province);
    }
    // private function for get province by id
    private function get_province_id($key, $id=null)
    {
        $client   = new Client();
        $response = $client->request('GET', "https://api.rajaongkir.com/starter/province",[
            'headers' => [
                'key' => $key,
            ],
            'query' => [
                'id' => $id
            ],
        ]);
        $result = json_decode($response->getBody(), true);
        return isset($result['rajaongkir']['results']) ? $result['rajaongkir']['results'] : false;
    }
    // index city
    public function indexcity()
    {
        $key = env('API_KEY');
        $city = HTTP::get("https://api.rajaongkir.com/starter/province",[
            'header' => [
                'Key'=>$key
            ]
        ]);
        dd($city);
        if ($city) {
            return view('cekongkir.index', ['city' => $city ]);
        }else{
            return response()->json(['status' => 'failed', 'message'=>'Failed to load city']);
        }
    }

}
