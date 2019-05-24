<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AWS;

class SMSController extends Controller
{


    protected function sendSMS(Request $request){
        $phone_number= $request->input('numeros');
        $sms = AWS::createClient('sns');
        $coleccion=explode(";", $phone_number);
        $mensaje=utf8_encode($request->input('mensaje'));

        for ($i=0; $i <  count($coleccion, COUNT_RECURSIVE); $i++) {
            $coleccion[$i]= '+57'.$coleccion[$i];
            $sms->publish([
                'Message' => $mensaje,
                'PhoneNumber' => $coleccion[$i],
                'MessageAttributes' => [
                    'AWS.SNS.SMS.SMSType'  => [
                        'DataType'    => 'String',
                        'StringValue' => 'Transactional',
                     ]
                 ],
              ]);
        }

        return 'Mensaje enviado';
    }

}
