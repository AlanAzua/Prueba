<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\OrdersController;
use App\Models\User;

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
Route::get('orders', [OrdersController::class, 'index']);
Route::get('orders/list', [OrdersController::class, 'getOrders'])->name('orders.list');
Route::resource('usuarios', UsuarioController::Class);
Route::post('/crearUsuarios', 'UsuarioController@create')->name('usuarios.crear');
