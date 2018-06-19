<?php

namespace App\Http\Middleware;

use Closure;

class Enter
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
        if($request->has('pass')){
            if($request->get('pass') == 'test'){
                return $next($request);
            }
        }
        return redirect('/');
    }
}
