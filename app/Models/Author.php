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

    public function books()
    {
        return $this->hasMany(Book::class,'author_id','id'); 
        // ogni book ha come chiave esterna author_id e author_id internamente a un oggetto Author a punta a id
    }
}
