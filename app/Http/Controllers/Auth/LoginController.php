<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Forces the Auth component to use @name POST field as
     * The primary entry instead of using @email POST field.
     *
     * @return string
     */
    public function username()
    {
        return 'name';
    }

    /**
     * Redirect @GET['/login'] to @GET['/']
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function showLoginForm()
    {
        return redirect()->route('home')->with('alert-danger', 'You need to login to gain access to this page!');
    }
}
