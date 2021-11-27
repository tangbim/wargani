<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class UserController extends Controller
{

    public function login()
    {
        return view('login', [
            "title" => "login",
            //masih kosong yakk
        ]);
    }

    public function signup()
    {
        return view('signup', [
            "title" => "signup",
            //masih kosong yakkk
        ]);
    }
}
