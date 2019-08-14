<?php

namespace App\Http\Controllers\Errors;

use Enigma\Theme\Theme;
use App\Http\Controllers\Controller;

class NotFoundController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return response()->view(app('theme')->make('errors.404', true), ['notfound' => true], 404);
        //return response()->view(config('enigma.theme.name').'.errors.404', ['notfound' => true], 404);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function abort($exception)
    {
        abort(404);
    }
}
