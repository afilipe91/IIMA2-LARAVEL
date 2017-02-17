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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/iim', function () {
//    return view('partie1.iim');
//});
//
//Route::get('/iim/{id}', function ($id){
//    return view('partie1.eleve', ['id' => $id]);
//});
//Route::get('/page1', function (){
//    return view('partie1.page1');
//});
//Route::get('/page2', function (){
//    return view('partie1.page2');
//});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/article', 'ArticleController');

Route::get('/user', 'UserController@index');

Route::resource('/contact', 'ContactController');

Route::resource('/upload', 'UploadController');

Route::resource('/comment', 'CommentController');

Route::get('/admin', function () {
    return view('admin.home');
})->middleware('isAdmin');

Route::get('/noadmin', function () {
    return view('admin.acces');
});

Route::get('post/like/{id}', ['as' => 'post.like', 'uses' => 'LikeController@likePost']);

Route::post('/comment/{article_id}/create', ['uses' => 'CommentController@store', 'as' => 'comment.store']);
