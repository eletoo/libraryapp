<?php

namespace App\Models;

class DataLayer
{
    // contiene tutti i metodi per interagire con il DB
    public function listAuthors()
    {
        return Author::orderBy('last_name', 'asc')->orderBy('first_name', 'asc')->get();
    }

    public function listBooks()
    {
        return Book::orderBy('title', 'asc')->get();
    }

    public function addBook($title, $authorid)
    {
        $newbook = new Book;
        $newbook->title = $title;
        $newbook->author_id = $authorid;
        $newbook->save();
    }

    public function findBookById($id)
    {
        return Book::find($id);
    }

    public function editBook($id, $newtitle, $newauthorid)
    {
        $book = $this->findBookById($id);
        $book->title = $newtitle;
        $book->author_id = $newauthorid;
        $book->save();
    }
}