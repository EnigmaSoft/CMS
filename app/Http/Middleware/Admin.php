<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Http\Controllers\Errors\NotFoundController;

class Admin
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
        if (Auth::user()->gm >= 4) {
            return $next($request);
        }
        return app(NotFoundController::class)->render();
        //dd(abort(404));
        //return redirect('/')->with('alert-danger', 'You do not have access to this page!');
     }
}
