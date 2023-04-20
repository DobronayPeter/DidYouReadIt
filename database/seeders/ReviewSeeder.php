<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            ['user_id' => 1, 'book_id' => 1, 'rating' =>  4, 'progress' => 'reading', 'shared' => false],
            ['user_id' => 2, 'book_id' => 2, 'rating' =>  3, 'progress' => 'completed', 'shared' => true],
            ['user_id' => 1, 'book_id' => 3, 'rating' =>  5, 'progress' => 'completed', 'shared' => true],
            ['user_id' => 2, 'book_id' => 3, 'rating' =>  1, 'progress' => 'trashed', 'shared' => true],
        ]);
    }
}
