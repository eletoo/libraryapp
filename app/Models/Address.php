<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';
    public $timestamps = false;

    // address ha una relazione 1:1 con author, quindi deve esserci un belongsTo in Address e un hasOne in Author
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}