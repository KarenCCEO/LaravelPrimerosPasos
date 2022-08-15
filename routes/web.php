<?php

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

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
//para que los argumentos sean opcionales se agrega el signo de interrogacion deses del uri
//Route::get('test/{id}/{name}', function ($id, $name)






Route::middleware([\App\Http\Middleware\TestMiddlware::class])->group(function ()
{
    Route::get('test/{id?}/{name?}', function ($id = 10, $name="karen"){
        echo $id;
        echo $name;
    });

});
Route::group(['prefix'=>'dashboard'],function(){
    Route::resource('post',PostController::class);
    Route::resource('category', CategoryController::class);
});



//Route::controller(PostController::class)->group(function(){
//Route::get('post',[PostController::class,'index']);
//Route::get('post/{post}',[PostController::class,'show']);
//Route::get('post/create',[PostController::class,'create']);
//Route::get('post/{post}/edit',[PostController::class,'edit']);

//Route::post('post',[PostController::class,'store']);
//Route::put('post/{post}',[PostController::class,'update']);
//Route::delete('post/{post}',[PostController::class,'delete']);
//});
