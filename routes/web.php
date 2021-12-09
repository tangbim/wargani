<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    Route::delete('/dashboard/user/{user:id}', [DashboardController::class, 'destroy2']);
});

Route::group(['middleware' => ['auth']], function(){
    Route::put('/account/{user:id}/edit', [AccountController::class, 'update']);
    Route::get('/account', [AccountController::class, 'index']);
    Route::delete('/account/{user:id}', [AccountController::class, 'destroy']);
});

Route::post('/comment', [CommentController::class, 'store']);

require __DIR__ . '/auth.php';
