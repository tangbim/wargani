<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{

    public function index()
    {
        return view('articles', [
            "title" => "Articles",
            "articles" => Article::all()
        ]);
    }

    public function show(Article $article)
    {
        return view('article', [
            "title" => "Single Post",
            "article" => $article
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StoreArticleRequest $request)
    {
        //
    }

    public function edit(Article $article)
    {
        //
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }
    public function destroy(Article $article)
    {
        //
    }
}
