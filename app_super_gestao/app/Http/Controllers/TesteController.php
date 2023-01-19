<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $a,int $b){
        // return view('site.teste.teste',['a'=>$a,'b'=>$b]);//array associativo
        // return view('site.teste.teste',compact('a','b'));//compact
        return view('site.teste.teste')->with('a',$a)->with('b',$b);//with
       
    }
}
