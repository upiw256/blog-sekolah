<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use GuzzleHttp\Client;
class Data extends BaseController
{
    public function index()
    {
        $client = new Client();

        $sekolah = $client->request('GET', 'http://app.sman1margaasih.sch.id:8080/');
        $siswa = $client->request('GET', 'http://app.sman1margaasih.sch.id:8080/siswa');
        $rombel = $client->request('GET', 'http://app.sman1margaasih.sch.id:8080/rombel');
        // $response = $client->request('GET', 'http://app.sman1margaasih.sch.id:8080/');

        $data=[
            'sekolah'=>json_decode($sekolah->getBody()),
            'siswa'=>json_decode($sekolah->getBody()),
            'rombel'=>json_decode($sekolah->getBody())
            ] ;

        return view('home/data', $data);
    
    }
}
