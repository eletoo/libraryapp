<?php

namespace App\Models;

class DataLayer {
    // contiene tutti i metodi per interagire con il DB
    public function listAuthors(){
        return Author::orderBy('last_name','asc')->orderBy('first_name','asc')->get();
    }

    public function listBooks(){
        return Book::orderBy('title','asc')->get();
    }
}