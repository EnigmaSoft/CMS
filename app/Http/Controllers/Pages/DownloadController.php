<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Show the Download page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('theme::pages.download');
    }
}
