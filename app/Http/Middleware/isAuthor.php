<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAuthor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userRole = auth()->user()->role;
        if($userRole !== 'admin' && $userRole !== 'author'){
            abort('403', 'شما مجوز دسترسی به این صفحه ندارید!');
        }
        return $next($request);
    }
}
