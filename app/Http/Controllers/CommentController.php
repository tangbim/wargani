<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
    //unecessary
    public function index()
    {
        return view('article', [
            'name' => 'name',
            'comments' => Comment::all()
        ]);
    }

    //unecessary
    public function show(Comment $comment)
    {
        return view('article', [
            'name' => $comment->name,
            'article' => $comment->articles,
            'comment' => $comment->comment
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StoreCommentRequest $request)
    {
        //
    }

    public function edit(Comment $comment)
    {
        //
    }

    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        //
    }
}
