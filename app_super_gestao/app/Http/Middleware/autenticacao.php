<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class autenticacao
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $autenticacao , $acao)
    {
        if(true){
            var_dump($autenticacao,$acao);
            echo '<hr>';
            return $next($request);
        }
            return Response('Rota exige auth');
        
    }
}
