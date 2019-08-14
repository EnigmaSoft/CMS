<?php

namespace App\Http\Controllers\GameMaster;

use App\News;
use App\Http\Controllers\Controller;



class DashboardController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $articles = News::all()->count();
        return view('gm.dashboard', compact('articles'));
    }

}
