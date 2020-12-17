<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')-insert([
            "title" => " A",
            "author" => "Nama Pengarang",
            "year" => "2020"
        ]);
        
    }
}
