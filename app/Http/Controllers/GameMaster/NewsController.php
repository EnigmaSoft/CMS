<?php

namespace App\Http\Controllers\GameMaster;

use App\News;
use App\Http\Controllers\Controller;
use App\Http\Controllers\News as NewsC;
use App\Http\Controllers\UserController as User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class NewsController extends Controller
{

    /**
     * 
     * 
     */
    protected $perPage = 15;


    /**
     * Display the specified article.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = News::orderBy('created_at', 'desc')->withTrashed()->paginate($this->perPage);
 
        foreach ($articles as $article)
        {
            $article->theme = NewsC::getTheme($article->category);
            $article->vcategory = NewsC::sortCat($article->category);
            $article->vauthor = User::getUsernameById($article->author);
        }

        return view('gm.news.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gm.news.article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $alert = 'alert-danger';
        $message = 'Article not found!';

        $record = News::where('slug', $slug)->first();
        if ($record != null)
        {
            if ($record->delete())
            {
                $alert = 'alert-success';
                $message = 'Article removed successfully.';
            }
        }

        return redirect()->back()->with($alert, $message);
    }
}
