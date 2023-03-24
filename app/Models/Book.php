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

    public function author(){
        return $this->belongsTo(Author::class,'author_id','id');
        // ogni book ha come chiave esterna author_id e author_id internamente a un oggetto Author a punta a id
    }
}