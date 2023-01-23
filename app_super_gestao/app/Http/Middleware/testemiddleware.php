<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class testemiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo'<hr><pre>';
        var_dump([2,__file__]);
        echo'</pre><hr>';
        return $next($request);
    }
}
