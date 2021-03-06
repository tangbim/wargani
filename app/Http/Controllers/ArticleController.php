<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller {

    public function index() {
        return view('articles', [
            "title" => "Articles",
            "articles" => Article::with(['category'])->latest()->get(),
        ]);
    }

    public function show(Article $article) {
        return view('article', [
            "title" => "Single Article",
            "article" => $article,
            "name" => $article->name,
            "comments" => $article->comments
        ]);
    }

    public function create() {
        //
    }

    public function store(StoreArticleRequest $request) {
        //
    }

    public function edit(Article $article) {
        //
    }

    public function update(UpdateArticleRequest $request, Article $article) {
        //
    }
    public function destroy(Article $article) {
        //
    }
}
