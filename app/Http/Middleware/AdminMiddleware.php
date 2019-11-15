<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth()->check() && Auth()->User()->rol == 1){
            return $next($request);
        }else{
            return redirect()->route('home')->withStatus(__('No Posees Suficientes Permisos.'));
        }
    }
}
