<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Middleware\LogAcessoMiddleware;
class ContatoController extends Controller
{

    public function __construct()
    {
        
        $this->middleware(LogAcessoMiddleware::class);

        
    }
    public function contato():mixed{

        return view('site.contato');
    }
}
