<?php

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
    //return ("Bienvenido perro");
});

Route::get('productos', function() {
    return "Producto";
});

Route::get('productos/{name}', function($name) {
    return "Producto: $name";
});

Route::get('users/{id}', function ($id) {
    return "usuario: $id";
});