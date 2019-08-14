<?php

namespace App\Http\Controllers\Pages;

use App\News as Model;
use App\Http\Controllers\News;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController as User;

class NewsController extends Controller
{

    /**
     * 
     * 
     */
    protected $perPage = 1;

    /**
     * 
     * 
     */
    public $articles = [];


    /**
     * Display the specified article.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function __construct($articles = [])
    {
        $this->articles = $articles;
    }


    /**
     * Display the specified article.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function showIndex()
    {
        $title = 'News: All';
        $this->articles = Model::latest()->paginate(config('server.news.perPage', $this->perPage));

        $this->convertAttributes();
        $articles = $this->articles;

        return view('pages.news.index', compact('title', 'articles'));
    }


    /**
     * Display all articles of category-type General.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function showGeneral()
    {
        $title = 'News: General';
        $this->articles = Model::General()->latest()->paginate(config('server.news.perPage', $this->perPage));

        $this->convertAttributes();
        $articles = $this->articles;

        return view('pages.news.index', compact('title', 'articles'));
    }


    /**
     * Display all articles of category-type Update.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function showUpdate()
    {
        $title = 'News: Game Updates';
        $this->articles = Model::Update()->latest()->paginate(config('server.news.perPage', $this->perPage));
        
        $this->convertAttributes();
        $articles = $this->articles;

        return view('pages.news.index', compact('title', 'articles'));
    }


    /**
     * Display all articles of category-type Notice.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function showNotice()
    {
        $title = 'News: Notice';
        $this->articles = Model::Notice()->latest()->paginate(config('server.news.perPage', $this->perPage));
        
        $this->convertAttributes();
        $articles = $this->articles;

        return view('pages.news.index', compact('title', 'articles'));
    }


    /**
     * Display all articles of category-type Event.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function showEvent()
    {
        $title = 'News: Events';
        $this->articles = Model::Event()->latest()->paginate(config('server.news.perPage', $this->perPage));
        
        $this->convertAttributes();
        $articles = $this->articles;

        return view('pages.news.index', compact('title', 'articles'));
    }


    /**
     * Display all articles of category-type Maintenance.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function showMaintenance()
    {
        $title = 'News: Maintenances';
        $this->articles = Model::Maintenance()->latest()->paginate(config('server.news.perPage', $this->perPage));
        
        $this->convertAttributes();
        $articles = $this->articles;

        return view('pages.news.index', compact('title', 'articles'));
    }


    /**
     * Display all articles of category-type Promotion.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function showPromotion()
    {
        $title = 'News: Promotions';
        $this->articles = Model::Promotion()->latest()->paginate(config('server.news.perPage', $this->perPage));
        
        $this->convertAttributes();
        $articles = $this->articles;

        return view('pages.news.index', compact('title', 'articles'));
    }


    /**
     * Display the specified article.
     *
     * @param  \App\News  $slug
     * @return \Illuminate\Http\Response
     */
    public function showArticle(Model $slug)
    {
        /**
         * Laravel's got the magic wand over here.
         * 
         * If the Article record cannot be found (meaning $slug == null),
         * Laravel automatically dispatches (abort with) a 404 Not Found response.
         */

        array_push($this->articles, $slug);
        $this->convertAttributes();

        return view('pages.news.article', ['articles' => $this->articles]);
    }


    /**
     * Update the Collection with missing Attributes.
     *
     * @return NewsController
     */
    public function convertAttributes()
    {
        foreach ($this->articles as $article)
        {
            $article->vauthor = User::getUsernameById($article->author);
            $article->theme = News::getTheme($article->category);
            $article->vcategory = News::sortCat($article->category);
            $article->vstate = News::sortState($article->state);
        }
        
        return $this;
    }


    /**
     * Display the specified article.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendRedirect()
    {
        return redirect()->route('news');
    }
}
