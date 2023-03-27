<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function usersbooks() {
        return $this->hasMany(UsersBooks::class);
    }
}
