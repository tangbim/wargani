<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class LoginController extends Controller {

    public function login() {
        return view('login.login', [
            "title" => "Login",

        ]);
    }
    public function account() {
        return view('account', [
            "title" => "Account",
            //masih kosong yakkk
        ]);
    }
}
