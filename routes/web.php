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

Route::get('/coffeelist_signature', function () {
    return view('coffeelist_signature');
});

Route::get('/coffeelist_other', function () {
    return view('coffeelist_other');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/transaction', function () {
    return view('transaction');
});

Route::get('/menu/{id}', [ListDrinkController::class, 'showAllCoffee']);
Route::get('/transaction/{id}', [TransactionController::class, 'showTransactions']);
Route::get('/category/{id}', [CategoryController::class, 'showCategoryCoffee']);

