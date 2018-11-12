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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::redirect("/","/home");
Route::get('/home', 'HomeController@index')->name('home');
Route::get("/profile/{id}",'HomeController@profile')->name("profile");
Route::get("/admin","HomeController@admin")->name("admin");

Route::get("/post/{id}","PostController@view")->name("post.show");
Route::post("/post/new","PostController@create")->name("post.new");
Route::post("/post/{id}/edit","PostController@edit")->name("post.edit");
Route::delete("/post/{id}/delete","PostController@delete")->name("post.delete");

Route::post("/comment/{id}/new", "CommentController@create")->name("comment.new");

Route::post("/admin/edit/role","UserController@role")->name("user.change.role");
Route::post("/admin/new/category","CategoryController@new")->name("category.new");
Route::post("/admin/comment/approve","CommentController@approve")->name("comment.approve");