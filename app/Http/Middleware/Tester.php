<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Tester
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
         if (Auth::user()->gm >= 1) {
             return $next($request);
         }
         return app(NotFoundController::class)->render();
     }
}
