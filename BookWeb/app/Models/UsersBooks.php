<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersBooks extends Model
{
    public function books() {
        return $this->belongsTo(Book::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
