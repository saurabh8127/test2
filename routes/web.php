<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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



// Route::get('/about', function () {
//     return view('pages.about');
// });


// pass the value using route
// Route::get('/user/{id} /{name}', function ($id,$name) {
//     return 'this is user ' . $name. ' with id '. $id;
// });



// set the route using Controller

Route::get('/',[PagesController::class,'index'] );
Route::get('/about',[PagesController::class,'about'] );
Route::get('/services',[PagesController::class,'services'] );

Route::get('/index',[PostsController::class,'index']);
Route::get('/create',[PostsController::class,'create'])->name('create');

Route::resource('/index1','\App\Http\Controllers\PostsController');

