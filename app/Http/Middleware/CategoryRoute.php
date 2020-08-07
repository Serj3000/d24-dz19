<?php

namespace App\Http\Middleware;

use Closure;

class CategoryRoute
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


        if(isset($request->slug)){
            
            return $next($request->slug);
        }
    }
}
