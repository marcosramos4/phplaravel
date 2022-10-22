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
});
Route::get('contactos', function () {
    return view('contacto');
});

Route::get('ruta', function () {
echo route('miruta').'/uno<br>';
echo route('miruta').'/Dos<br>';
echo route('miruta').'/Tres<br>';
echo route('miruta').'/Cuatro<br>';
echo route('miruta').'/Cinco<br>';

    return "estas en la pagina contacto";
});

Route::get('parametro/{nombre?}', function ($nombre="invitado") {
    return "estas en la pagina contacto bienvenido $nombre";
});

Route::get('rutas',['as'=>'miruta',function (){
return route('miruta').'/uno';
}]);
