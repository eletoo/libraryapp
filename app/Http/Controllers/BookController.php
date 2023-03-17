<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // costruisco un array di libri e lo passo a book.index
        $books = array();
        // aggiungo elementi all'array
        $books[] = new Book("Divina Commedia", "Dante Alighieri");
        $books[] = new Book("Iliade", "Omero");
        $books[] = new Book("Eneide", "Virgilio");
        // passo l'array alla vista (invoco la vista con l'array)
        return view('book.index')->with('books_list', $books);
    }
}