<?php

use App\Http\Controllers\TodosController;
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

Route::get('/todo/create', [TodosController::class, 'store'])->name('store');
Route::get('/todo', [TodosController::class, 'index'])->name('index');
Route::get('/todo/{id}', [TodosController::class, 'index'])->name('index');
