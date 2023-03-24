<?php

namespace App\Http\Controllers;

use App\Models\DataLayer;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $dl = new DataLayer();
        $authors = $dl->listAuthors();
        return view('author.index')->with('authors_list', $authors);
    }
}
