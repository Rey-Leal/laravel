<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Padrao Laravel
// Route::get('/', function () {
//     return view('clientes');
// });

// Padrao Larravel e MVC (em casos de erro usar caminho completo do controller)
Route::get('/', 'App\Http\Controllers\ClientesController@index');
Route::get('/{id}', 'App\Http\Controllers\ClientesController@buscar');

Route::post('/', 'App\Http\Controllers\ClientesController@inserir');
