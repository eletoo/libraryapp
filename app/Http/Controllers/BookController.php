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

    public function create() // apre la form per la creazione, ma non effettua davvero la creazione
    {
        $dl = new DataLayer();
        $authors = $dl->listAuthors();
        return view('book.editBook')->with('authors_list', $authors);
    }

    public function store(Request $request)
    //recepisce la richiesta di aggiunta di un libro sotto forma di string request da cui può recuperare titolo e author_id
    {
        $dl = new DataLayer();
        $dl->addBook($request->input('title'), $request->input('authorid'));
        return Redirect::to(route('book.index'));
    }

    public function edit($id) //apre la form per la modifica, ma non effettua davvero la modifica
    {
        $dl = new DataLayer();
        $authors = $dl->listAuthors();
        $book = $dl->findBookById($id);
        return view('book.editBook')->with('authors_list', $authors)->with('book', $book);
    }

    public function update(Request $request, $id) // rotta per effettuare la modifica (richiamata dal submit del form di modifica)
    {
        $dl = new DataLayer();
        $dl->editBook($id, $request->input('title'), $request->input('authorid'));
        return Redirect::to(route('book.index'));
    }

    public function destroy()
    {
        return view('book.deleteBook');
    }
}