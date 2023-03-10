<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

/* 
| Attivo questa rotta quando ricevo una chiamata http GET
| parametri:
| - URL della rotta a partire da localhost:porta
| - controller e suo metodo da eseguire 
*/
Route::get('/', [FrontController::class, 'getHome'])->name('home');

//Route::Resource('/', [FrontController::class, 'getBooks'])->name('books');
//Route::Resource('/', [FrontController::class, 'getAuthors'])->name('authors');