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
}
