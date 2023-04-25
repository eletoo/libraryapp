<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

/* 
| Attivo questa rotta quando ricevo una chiamata http GET
| parametri:
| - URL della rotta a partire da localhost:porta
| - controller e suo metodo da eseguire 
*/
Route::get('/', [FrontController::class, 'getHome'])->name('home');

//Route::get('/book', [BookController::class, 'index'])->name('book.index'); //rotta inclusa nella riga successiva
Route::resource('book',BookController::class);

Route::get('/author', [AuthorController::class, 'index'])->name('author.index');