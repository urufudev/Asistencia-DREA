<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckBanned
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
        if(auth()->check() && (auth()->user()->status == 'SUSPENDIDO')){
                Auth::logout();
    
                $request->session()->invalidate();
    
                $request->session()->regenerateToken();
    
                return redirect()->route('login')->with('error', 'Su cuenta fue deshabilitada, consulte con el Área de Personal');
    
        }
    
        return $next($request);
    }
}
