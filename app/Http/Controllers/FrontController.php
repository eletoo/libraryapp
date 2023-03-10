<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function getHome()
    {
        return view('index');
    }

    public function getBooks()
    {
        return view('books');
    }

    public function getAuthors()
    {
        return view('authors');
    }
}
