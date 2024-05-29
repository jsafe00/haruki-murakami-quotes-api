<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'text', 
        'book_id'
    ]; 

    /**
     * Get the book that owns the quote.
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
