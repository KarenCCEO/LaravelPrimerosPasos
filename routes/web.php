<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
Route::get('/',[TestController::class,'test']);
/*Route::get('/', function () {
    return view('welcome');
});
/*Enviando informacion a custom*/
Route::get('/custom', function () {
    $msj = "Este es un mensaje que se envia desde el servidor";
    $data = ['nombre' => "Karen Suarez", 'domicilio'=> "Albuquerque, Nuevo Mexico"];
    return view('custom', ['msj'=> $msj , 'edad'=> 22], $data);
});
Route::get('/contacto', function () {
    return view('contacto');
})->name('contactoNombre');




