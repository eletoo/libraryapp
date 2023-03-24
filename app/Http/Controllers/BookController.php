<?php

namespace App\Http\Controllers;

use App\Models\DataLayer;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $dl = new DataLayer();
        $books = $dl->listBooks();
        // passo l'array alla vista (invoco la vista con l'array)
        return view('book.index')->with('books_list', $books);
    }
}