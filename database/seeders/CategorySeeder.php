<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'Action',
                'descrption' => 'Film dengan adegan-adegan penuh aksi dan ketegangan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Comedy',
                'descrption' => 'Film dengan adegan-adegan penuh menghibur dan mengundang tawa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Drama',
                'descrption' => 'Film yang berfokus pada pegembangan karakter dan konflik emoi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Sci-Fi',
                'descrption' => 'Film dengan latar belakang ilmiah dan teknologi futuristik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Romance',
                'descrption' => 'Film yang berpusat pada kisah cinta dan hubungan romantis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        }   
}
