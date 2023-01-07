<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal():mixed{

      return view('site.principal');
    }

    public function regex( string $nome,int $id =0){

      var_dump($nome,$id);
    }


    public function principalParam(string $nome,string $capitulo='um'):mixed{
var_dump('os parametros chegaram aqui',$nome,$capitulo);
        return view('site.principal');
      }
}
