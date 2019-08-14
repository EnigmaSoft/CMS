<?php

namespace App\Http\Controllers\Pages;

use Hash;
use Auth;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConfirmUserPassword;

class LockController extends Controller
{

    /**
     * Show the GM dashboard.
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function show()
    {
        if (session()->has('last_unlocked'))
        {
            $expire = session('last_unlocked')->copy()->addMinutes(30);
            if (Carbon::now()->lt($expire))
            {
                return redirect()->route('gm.dashboard');
            }
        }
        return view('standalone.lockscreen');
    }


    /**
     * Confirm user password on the lockscreen gate,
     * renew authorization and redirect to the GM Dashboard.
     *
     * @param  ConfirmUserPassword  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function confirm(ConfirmUserPassword $request)
    {
        $url = session('locked_url');
        if (Hash::check($request->input('password'), Auth::user()->password))
        {
            $request->session()->put('last_unlocked', Carbon::now());
            session()->forget('locked_url');
            return redirect($url);
        }
        else
        {
            return redirect()->back()->withDanger('<strong>Error!</strong> The password you entered, is incorrect.');
        }
    }
}