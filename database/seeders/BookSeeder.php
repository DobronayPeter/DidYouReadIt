<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['title' => Str::random(10), 'author' => Str::random(10)],
            ['title' => Str::random(10), 'author' => Str::random(10)],
            ['title' => Str::random(10), 'author' => Str::random(10)],
            ['title' => Str::random(10), 'author' => Str::random(10)],
        ]);
    }
}
