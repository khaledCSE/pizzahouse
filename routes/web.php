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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizzas = [
        [
            'type' => 'Hawaiian',
            'base' => 'Cheesy Crust',
            'price' => 10,
        ],
        [
            'type' => 'Volcano',
            'base' => 'Garlic Crust',
            'price' => 10,
        ],
        [
            'type' => 'Veg Supreme',
            'base' => 'Thin and Crispy',
            'price' => 10,
        ],
    ];
    return view('pizzas', ['pizzas' => $pizzas]);
});

Route::get('/pizzas/{id}', function ($id) {
    return view('details', ['id' => $id]);
});
