<?php
namespace App\Clases;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class Guzzle
{


    function __construct() {

    }
    public function iniciar()
    {

       return new \GuzzleHttp\Client();
    }
  public function ip()
    {
            if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];

    return $_SERVER['REMOTE_ADDR'];
    }
}
