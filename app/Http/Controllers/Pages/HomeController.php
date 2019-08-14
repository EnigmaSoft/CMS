<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\News;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Pages\NewsController;

class HomeController extends Controller
{
    /**
     * Show the Homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // Get a collection of the Three (3) Latest News articles.
        $articles = ['articles' => News::getLatest()];

        // Instantiate the NewsController and
        // Push the collection of Articles into the NewsController.
        $controller = app(NewsController::class, $articles);

        // Convert the necessary Data Attributes of the Collection
        // of Articles within the NewsController and retrieve the Collection.
        $news = $controller->convertAttributes()->articles;

        /*$news = app(NewsController::class, ['articles' => News::getLatest()])
            ->convertAttributes()
            ->articles;*/

        # All 4 can be used to produce your Theme Views!
        return view('theme::pages.home')->with(compact('news')); // native Laravel's View() function
        //return \Theme::make('pages.home')->with(compact('news')); // Theme alias with Make() method
        //return \Enigma\Theme\Theme::make('pages.home')->with(compact('news')); // Full Theme namespace with Make() method
        //return theme('pages.home')->with(compact('news')); // Theme() method
    }
}
