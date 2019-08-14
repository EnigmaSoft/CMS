<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class Lock
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
        $continue = false;
        if (session()->has('last_unlocked'))
        {
            $expire = session('last_unlocked')->copy()->addMinutes(30);
            if (Carbon::now()->lt($expire))
            {
                $continue = true;
                return $next($request);
            }
        }

        if (!$continue)
        {
            # redirect to Lockscreen
            $request->session()->put('locked_url', request()->fullUrl());
            return redirect()->route('lockscreen');
        }
    }
}
