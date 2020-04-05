<?php
namespace App\Clases;
use App\User;
class Operaciones
{

    function __construct() {

    }
    public function validacion()
    {
        $arrays=array();
        $users=User::all();
        foreach ($users as $key => $a) {

            if($a->name!="MARLYS")
            $arrays[$key]="NO";

        }

          if($arrays<0){
            return view('vistas.plantilla',compact('arrays'));
          }else{
              return redirect('/generar');
          }




    }
    public function seguir()
    {
        return view('welcome');
    }

}



