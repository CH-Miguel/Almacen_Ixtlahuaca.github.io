<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/acerca-de", function () {
    return view("misc.acerca_de");
})->name("acerca_de.index");
Route::get("/soporte", function(){
    return redirect("https://parzibyte.me/blog/contrataciones-ayuda/");
})->name("soporte.index");

Auth::routes([
    "reset" => false,// no pueden olvidar contraseña
]);

//Route::get('/home', 'HomeController@index')->name('home');
// Permitir logout con petición get
Route::get("/logout", function () {
    Auth::logout();
    return redirect()->route("home");
})->name("logout");

Route::resource("clientes", App\Http\Controllers\ClientesController::class);
Route::resource("usuarios",  App\Http\Controllers\UserController::class)->parameters(["usuarios" => "user"]);
Route::resource("productos", App\Http\Controllers\ProductosController::class);
Route::get("/ventas/ticket", [App\Http\Controllers\VentasController::class, 'ticket'])->name("ventas.ticket");
Route::resource("ventas",  App\Http\Controllers\VentasController::class);
Route::get("/vender",  [App\Http\Controllers\VenderController::class, 'index'])->name("vender.index");
Route::post("/productoDeVenta",  [App\Http\Controllers\VenderController::class, 'agregarProductoVenta'])->name("agregarProductoVenta");
Route::delete("/productoDeVenta",  [App\Http\Controllers\VenderController::class, 'quitarProductoDeVenta'])->name("quitarProductoDeVenta");
Route::post("/terminarOCancelarVenta",  [App\Http\Controllers\VenderController::class, 'terminarOCancelarVenta'])->name("terminarOCancelarVenta");
