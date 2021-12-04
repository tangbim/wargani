<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ArticleController::class, 'index']);

Route::get('article/{article:slug}', [ArticleController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/article', [DashboardController::class, 'indexArticle']);
    Route::delete('/dashboard/article/{article:slug}', [DashboardController::class, 'destroy']);
});

// Route::get('/login', [LoginController::class, 'login']);

// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);

Route::get('/account', [LoginController::class, 'account']);

Route::post('/comment', [CommentController::class, 'store']);

require __DIR__ . '/auth.php';
