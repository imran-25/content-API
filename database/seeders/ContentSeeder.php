<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Content::create(
                [
                    'title' => 'Breaking',
                    'description' => 'Lorem Ipsum Dash Dash',
                    'image' => '',
                    'slug' => 'Breaking',
                    'category_id' => '1'

            ]);

            Content::create(
                [
                    'title' => 'Bangladesh',
                    'description' => 'Lorem Ipsum Dash Dash',
                    'image' => '',
                    'slug' => 'Bangladesh',
                    'category_id' => '2'

                ]);

            Content::create(
                    [
                      'title' => 'Footbal',
                      'description' => 'Lorem Ipsum Dash Dash',
                      'image' => '',
                      'slug' => 'Footbal',
                      'category_id' => '3'

                    ]);


    }
}
