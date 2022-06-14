<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    public function getAllForToday(){

        $url = 'https://www.cbar.az/currencies/21.04.2022.xml';
        $client = new Client(); // ['base_uri' => 'https://www.cbar.az']
        $resp = $client->request('GET',$url,[
            'headers' => ['Accept' => 'application/xml']
        ]);
        $xml = simplexml_load_string($resp->getBody(),'SimpleXMLElement',LIBXML_NOCDATA);

        // json
        $json = json_encode($xml);

        // array
        $array = json_decode($json, true);


        return $array['ValType'];
    }
}
