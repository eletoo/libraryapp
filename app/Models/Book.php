<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book'; //Book corrisponderà alla tabella book del database
    public $timestamps = false;
    protected $fillable = ['title', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
        // ogni book ha come chiave esterna author_id e author_id internamente a un oggetto Author a punta a id
    }

    //la relazione molti-a-molti richiede di usare le parentesi quando si scrive $book->categories()
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
        //campi di belongsToMany():
        //classe a cui appartiene $this
        //nome della pivot table
        //campo della pivot table che punta all'id dell'istanza in cui mi trovo
        //campo della pivot table che punta all'id dell'istanza in cui vado
    }
}