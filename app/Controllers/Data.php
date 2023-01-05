<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use GuzzleHttp\Client;
class Data extends BaseController
{
    public function index()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://app.sman1margaasih.sch.id:8080/');

        $data['items'] = json_decode($response->getBody());

        return view('home/data', $data);
    
    }
}
