<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/downloads';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return app('theme')->make('auth.register');
    }

    /**
     * Define all Custom Validation Messages.
     *
     * @return array
     */
    protected function messages()
    {
        # TODO: Move into a separate Translation file
        return [
            'registration-username.required' => 'You must choose a Username!',
            'registration-username.alpha_num' => 'Your Username may only contain letters and numbers.',
            'registration-username.min' => 'Your Username must be at least :min characters.',
            'registration-username.max' => 'Your Username may not be greater than :max characters.',
            'registration-username.unique' => 'This Username has already been taken.',

            'registration-email.required' => 'We need to know your E-Mail Address!',
            'registration-email.email' => 'Your E-Mail Address must be a valid E-Mail Address.',
            'registration-email.max' => 'Your E-Mail Address may not be greater than :max characters.',
            'registration-email.unique' => 'This E-Mail Address has already been used by another account.',

            'registration-password.required' => 'You must choose a Password!',
            'registration-password.min' => 'Your Password must be at least :min characters.',
            'registration-password.max' => 'Your Password may not be greater than :max characters.',
            'registration-password.confirmed' => 'The Password Confirmation does not match.',

            'gender.required' => 'You must choose a valid Gender!',
            'gender.in' => 'Your Gender may only be a Male or a Female.',

            'tos.accepted' => 'You must accept our Terms of Service and Privacy Policy!',
        ];
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        # TODO: Use Carbon and polish this ugly code
        (string) $minYear = date('Y', strtotime('-100 year'));
        (string) $maxYear = date('Y', strtotime('-10 year'));
        if (isset($data['day']))
        {
           $data['day'] = strlen($data['day']) < 2 ? '0'.$data['day'] : $data['day'];
        }
        if (isset($data['month']))
        {
           $data['month'] = strlen($data['month']) < 2 ? '0'.$data['month'] : $data['month'];
        }

        # debug code for Gender - commented for future use, whenever I feel like tackling this bug
        # bug source: Bootstrap frontend JavaScript library >.>
        /*if (isset($data['gender']))
        {
           //dd($data['gender']);
           if (!in_array($data['gender'], ['male', 'female']))
           {
               unset($data['gender']);
           }
        }*/

        return Validator::make($data, [
            'tos' => 'accepted',
            'registration-username' => 'required|alpha_num|min:3|max:12|unique:accounts,name',
            'registration-email' => 'required|email|max:255|unique:accounts,email',
            'registration-password' => 'required|min:6|max:12|confirmed',
            'day' => 'required|min:1|max:31|size:2',
            'month' => 'required|min:1|max:12|size:2',
            'year' => 'required|integer|min:'.$minYear.'|max:'.$maxYear.'',
            //'gender' => 'required|integer|min:1|max:1|digits_between:1,2',
            'gender' => 'required|in:male,female',
        ], $this->messages());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //$day = strlen($data['day']) < 2 ? '0'.$data['day'] : $data['day'];
        //$month = strlen($data['month']) < 2 ? '0'.$data['month'] : $data['month'];
        //info("{$data['year']}-{$month}-{$day}");
        //return response($data['year'].$month.$day);
        return User::create([
            'name' => $data['registration-username'],
            'email' => $data['registration-email'],
            'password' => bcrypt($data['registration-password']),
            'birthday' => "{$data['year']}-{$data['month']}-{$data['day']}",
            'lastwebnip' => request()->ip(),
            'gender' => ($data['gender'] == 'female') ?: 0,
        ]);
    }
}
