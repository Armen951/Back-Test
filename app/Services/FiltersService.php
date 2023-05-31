<?php

namespace App\Services;

use App\Models\Author;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Support\Facades\Http;

class FiltersService
{
    public function getCategories()
    {
        return Category::all();
    }

    public function getAuthors()
    {
        return Author::all();
    }

    public function getResources()
    {
        return Resource::all();
    }

    public function getResourceApi()
    {
        $response = Http::get('https://newsapi.org/v2/top-headlines/sources?apiKey='.env('NEWS_KEY'));

        return $response->json();
    }
}
