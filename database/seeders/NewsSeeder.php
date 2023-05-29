<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\News::factory()->create([
            'title' => 'News 1 ',
            'description' => 'Deescription Text',
            'img_url'=>'https://picsum.photos/200/300',
            'category_id' => 1 ,
            'author_id'=> 1 ,
            'resource_id'=> 1
        ]);

        \App\Models\News::factory()->create([
            'title' => 'News 2 ',
            'description' => 'Deescription Text',
            'img_url'=>'https://picsum.photos/200/300',
            'category_id' => 1 ,
            'author_id'=> 2 ,
            'resource_id'=> 1
        ]);
        \App\Models\News::factory()->create([
            'title' => 'News 3 ',
            'description' => 'Deescription Text',
            'img_url'=>'https://picsum.photos/200/300',
            'category_id' => 1 ,
            'author_id'=> 2 ,
            'resource_id'=> 2
        ]);
        \App\Models\News::factory()->create([
            'title' => 'News 4 ',
            'description' => 'Deescription Text',
            'img_url'=>'https://picsum.photos/200/300',
            'category_id' => 1 ,
            'author_id'=> 1 ,
            'resource_id'=> 1
        ]);
        \App\Models\News::factory()->create([
            'title' => 'News 5 ',
            'description' => 'Deescription Text',
            'img_url'=>'https://picsum.photos/200/300',
            'category_id' =>2 ,
            'author_id'=> 2 ,
            'resource_id'=> 2
        ]);
    }
}
