<?php

use App\Http\Controllers\PizzaController;
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

Route::get('/', function () {
    return view('welcome');
});

// pizza routes
Route::get('/pizzas', [PizzaController::class, 'index']);
Route::post('/pizzas', [PizzaController::class, 'store']);
Route::get('/pizzas/create', [PizzaController::class, 'create']);
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);
