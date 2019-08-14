<?php

namespace App\Http\Controllers\User;

use Hash;
use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAccountSettings;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class SettingsController extends Controller
{
    use AuthenticatesUsers;
    
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('theme::user.settings');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccountSettings $request)
    {
        $status = 'alert-danger';
        $message = 'Unable to update password, please report this to the Administrator.';
        if (Hash::check($request->input('current_password'), Auth::user()->password))
        {
            Auth::user()->password = bcrypt($request->input('new_password'));
            
            if (Auth::user()->save())
            {
                $status = 'alert-success';
                $message = 'Password updated successfully!';
            }
            else
            {
                # TODO: Log failed attempt of saving the Password to Database
            }
        }
        else
        {
            $status = 'alert-danger';
            $message = 'The password you entered is incorrect, please try again.';
        }
        
        return redirect()->back()->with($status, $message);
    }
}
