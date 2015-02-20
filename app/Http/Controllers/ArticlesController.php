<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Article;

class ArticlesController extends Controller {

    /**
     * @return \Illuminate\View\View
     */
    public function index()
	{
        $articles = Article::all();

        return View('articles.index', compact('articles'));
	}

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return View('articles.show', compact('article'));
    }

}
