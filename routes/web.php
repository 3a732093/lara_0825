<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

Route::get('/', function () {

    /*return view('welcome');*/
    /*
    $posts = new Post();
    $posts->title = 'test title';
    $posts->content = 'test content';
    $posts->save();*/

    /*$posts=Post::all();
    dd($posts);*/

    $posts=Post::find(7);
    dd($posts);


});

Route::get('index',[PostsController::class,'index'])->name('posts.index');

Route::get('about',[PostsController::class,'about'])->name('posts.about');

Route::get('post',[PostsController::class,'show'])->name('posts.show');

Route::get('contact',[PostsController::class,'contact'])->name('posts.contact');

Post::create([
        'title' =>'test title',
        'content' => 'test content',
]);


