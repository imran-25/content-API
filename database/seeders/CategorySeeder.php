<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Category::create(
            [
                'name' => 'Breaking',
                'image' => '',
                'slug' => 'Breaking'


        ]);

        Category::create(
            [
                'name' => 'Bangladesh',
                'image' => '',
                'slug' => 'Bangladesh'

            ]);

        Category::create(
                [
                  'name' => 'Footbal',
                  'image' => '',
                  'slug' => 'Footbal'

                ]);
    }
}
