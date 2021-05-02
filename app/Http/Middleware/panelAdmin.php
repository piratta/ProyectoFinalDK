<?php

namespace App\Http\Middleware;

use Closure;
use db;

class panelAdmin
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
        if($request->user()->status == 0){ //inactivo
            return redirect()->route('/');
    }
    return $next($request);

}
