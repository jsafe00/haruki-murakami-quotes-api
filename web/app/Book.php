<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 
        'author'
    ];

    /**
     * Get the quotes for the book.
     */
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
