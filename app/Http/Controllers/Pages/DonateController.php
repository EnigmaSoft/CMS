<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonateController extends Controller
{
    /**
     * Show the Donate page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('theme::pages.donate');
    }
}
