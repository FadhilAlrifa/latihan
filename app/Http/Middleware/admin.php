<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->level != 'admin'){
            if(auth()->user()->level == 'petugas'){
                return redirect('/petugas');
            }

            elseif(auth()->user()->level == 'masyarakat'){
                return redirect('/home');
            }

        }
        return $next($request);
    }
}
