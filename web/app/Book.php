<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
     /**
     * Get the author that owns the quote.
     */
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
