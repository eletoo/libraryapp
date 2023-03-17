<?php

namespace App\Models;

class Book
{
    var $title;
    var $author_surname;

    public function __construct($title, $author_surname)
    {
        $this->title = $title;
        $this->author_surname = $author_surname;
    }
}