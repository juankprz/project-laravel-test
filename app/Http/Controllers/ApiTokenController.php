<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;



class ApiTokenController extends Controller
{

    public function update(Request $request)
    {
        $token = Str::random(60);


        return ['token' => $token];
    }


}
