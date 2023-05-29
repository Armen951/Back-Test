<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Article::factory()->create([
            'title' => 'Article 1 ',
            'description' => 'Deescription Text',
            'img_url'=>'https://picsum.photos/200/300',
            'category_id' => 1 ,
            'resource_id'=> 1
        ]);

        \App\Models\Article::factory()->create([
            'title' => 'Article 2 ',
            'description' => 'Deescription Text',
            'img_url'=>'https://picsum.photos/200/300',
            'category_id' => 1 ,
            'resource_id'=> 1
        ]);
        \App\Models\Article::factory()->create([
            'title' => 'Article 3 ',
            'description' => 'Deescription Text',
            'img_url'=>'https://picsum.photos/200/300',
            'category_id' => 1 ,
            'resource_id'=> 2
        ]);
        \App\Models\Article::factory()->create([
            'title' => 'Article 4 ',
            'description' => 'Deescription Text',
            'img_url'=>'https://picsum.photos/200/300',
            'category_id' => 1 ,
            'resource_id'=> 1
        ]);
        \App\Models\Article::factory()->create([
            'title' => 'Article 5 ',
            'description' => 'Deescription Text',
            'img_url'=>'https://picsum.photos/200/300',
            'category_id' =>2 ,
            'resource_id'=> 2
        ]);
    }
}
