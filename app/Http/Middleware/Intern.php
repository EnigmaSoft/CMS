<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Intern
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
         if (Auth::user()->gm >= 2) {
             return $next($request);
         }
         return app(NotFoundController::class)->render();
     }
}
