<?php

namespace Core\Reader;

use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class Http {
    public static function getCod($url) {
        $client  =  new  \ GuzzleHttp \ Client();

        try {
            $response = $client->request('GET', $url);
            return $return = [
                'status' => "<span class='text-success'>".$response->getStatusCode()."ok</span>",
                'time' => "Update time: ".date('H:i:s')
            ];

       } catch (RequestException $e) {
           Psr7\str($e->getRequest());
           if ($e->hasResponse()) {
               return $return = [
                'status' => "<sapn class='text-danger'>".$e->getCode()."err</sapn>",
                'time' => "Update time: ".date('H:i:s')
            ];
           }
       }
       
    }
}