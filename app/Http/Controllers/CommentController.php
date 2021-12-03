<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
                'user_id' =>['required'],
                'article_id' => ['required'],
                'body' => ['required', 'string']
            ]);
        Comment::create($validated);
        return Redirect::back();
    }
}
