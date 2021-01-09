<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    /**
     * Get the author that owns the quote.
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
