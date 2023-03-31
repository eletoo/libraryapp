<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'author';
    public $timestamps = false;
    protected $fillable = ['first_name', 'last_name'];

    //$author->books restituisce un array di oggetti di tipo Book
    public function books()
    {
        return $this->hasMany(Book::class, 'author_id', 'id');
        // ogni book ha come chiave esterna author_id e author_id internamente a un oggetto Author a punta a id
    }

    //$author->address restituisce l'oggetto di tipo Address associato all'autore, con $author->address-> referenziamo 
    //un attributo di Address
    public function address()
    {
        return $this->hasOne(Address::class, 'author_id', 'id');
    }
}