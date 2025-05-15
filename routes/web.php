<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $posts = [];
    if(auth()->check()) {
        $posts = auth()->user()->userPosts()->latest()->get();
    }
    return view('home', ['posts' => $posts]);
});

Route::get('/userRegistration', function () {
    return view('userRegistration');
});

Route::post('/register', [UserController::class, 'register']);


Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login']);


Route::post('/logout', [UserController::class, 'logout']);


// Blog Post related routes
Route::post('/createPost', [PostController::class, 'createPost']);

Route::get('/editPost/{post}', [PostController::class, 'editPost']);

Route::put('/editPost/{post}', [PostController::class, 'updatePost']);

Route::delete('/deletePost/{post}', [PostController::class, 'deletePost']);
