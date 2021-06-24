<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TypeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->get('email') == 'abanik310@gmail.com')
        {
            return $next($request);
        }
        else 
        {
            
            return redirect('/home');
            
        }
        
    }
}