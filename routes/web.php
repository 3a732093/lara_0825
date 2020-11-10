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

Route::get('/', function (){

    /*return view('welcome');*/
    /*
    $posts = new Post();
    $posts->title = 'test title';
    $posts->content = 'test content';
    $posts->save();*/

    /*$posts=Post::all();
    dd($posts);*/

    /*$posts=Post::find(7);
    dd($posts);*/

    /*$posts=Post::where('id','<',10)->orderBy('id','DESC')->get();
    dd($posts);*/

    /*$posts= Post::find(5);
    $posts->update([
       'title'=>'updated title',
       'content'=>'updated content',
    ]);*/

   /* $posts = Post::find(6);
    $posts->title = 'saved title';
    $posts->content = 'saved content';
    $posts->save();*/

    /*$posts=Post::find(5);
    $posts->delete();*/

    /*Post::destroy(7,9,11);*/

    /*$allPosts=Post::all();
    dd($allPosts);*/


    $featuredPosts=Post::where('is_feature',0)->get();
    dd($featuredPosts);

});

Route::get('index',[PostsController::class,'index'])->name('posts.index');

Route::get('about',[PostsController::class,'about'])->name('posts.about');

Route::get('post',[PostsController::class,'show'])->name('posts.show');

Route::get('contact',[PostsController::class,'contact'])->name('posts.contact');

/*Post::create([
        'title' =>'test title',
        'content' => 'test content',
]);*/


