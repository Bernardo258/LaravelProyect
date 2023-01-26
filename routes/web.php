<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


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

Route::get('/login', function () {
    return view('login');
});
/*Route::get('/formulario', function () {
    return view('formulario');
});*/
Route::get('/', function () {
    return view('inicio');
});


Route::get('/formulario', [RegisterController::class,'index']);
Route::post('/formulario', [RegisterController::class, 'store']);