<?php

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


Route::get('/salut/{name}','WelcomeController@index');
Route::get('/salut/','WelcomeController@index');

Route::get('/contact/','ContactController@newContact');
Route::get('/listContacts/','ContactController@listContacts');

use App\Post;
Route::get('aa/', function () {
    $post=new Post;
    $post->title='nouveau article';
    $post->body='nouveau contenu';
    $post->save();
dd(Post::all());
    //DB::table('posts')->where('')->get();
    //dump(DB::select('SELECT * FROM posts'));
    //$post = App\Post::whereTitle('article1')->first();
    //dd($post->title);
   //$post =Post::create(['title'=>'aaaaaaa','body'=>'aaaaaaa']);
    //$name='<h1>siwar</h1>';
    //return view('welcome',compact('name'));
});


Route::get('salut/{slug}-{id}', function ($slug,$id) {
    return "slug: $slug , ID:$id";

});

Route::get('about', function () {

    return view('pages/about');

});
Route::get('help', function () {

    $name='siwar';
    $ecole='enetcomSfax';

    return view('pages/help',compact('name','ecole'));
});
Route::get('events', function () {
    $ev=['event1'=>'aaaa',
        'event2'=>'bbb',
        'event3'=>'ccc'];

    return view('pages/events',compact('ev'));
});
