<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BoardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;


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

Route::middleware(['can:user'])->resource('user', UserController::class)->only('index','edit','update','destroy')->names('user');


Route::middleware(['can:role'])->resource('role', RoleController::class)->except(['show'])->names('role');

Route::middleware(['auth:sanctum', 'verified'])->resource('board', BoardController::class)->except(['show']);

Route::middleware(['auth:sanctum', 'verified'])->get('message', function () {
    return "Ruta que imprime solamente un texto";
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::fallback(function () {
    abort(404);
});