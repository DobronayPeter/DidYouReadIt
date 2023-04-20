<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}