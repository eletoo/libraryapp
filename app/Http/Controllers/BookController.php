<?php

namespace App\Http\Controllers;

use App\Models\DataLayer;
use Illuminate\Http\Request;
use App\Models\Book;
use Redirect;

class BookController extends Controller
{
    public function index()
    {
        $dl = new DataLayer();
        $books = $dl->listBooks();
        // passo l'array alla vista (invoco la vista con l'array)
        return view('book.index')->with('books_list', $books);
    }

    public function create()
    {
        $dl = new DataLayer();
        $authors=$dl->listAuthors();
        return view('book.editBook')->with('authors_list', $authors);
    }

    public function store(Request $request) 
    //recepisce la richiesta di aggiunta di un libro sotto forma di string request da cui può recuperare titolo e author_id
    {
        $dl=new DataLayer();
        $dl->addBook($request->input('title'), $request->input('authorid'));
        return Redirect::to(route('book.index'));
    }
}