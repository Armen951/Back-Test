<?php

namespace App\Services;

use App\Models\News;
use Illuminate\Support\Facades\Http;

class NewsService
{
    public function getAll($data)
    {
        $news = News::when($data['category_id'] ?? null, function  ($q) use($data) {
            return $q->where('category_id', $data['category_id']);
        })->when($data['author_id'] ?? null, function  ($q) use($data) {
            return $q->where('author_id', $data['author_id']);
        })->when($data['resource_id'] ?? null, function  ($q) use($data) {
            return $q->where('resource_id', $data['resource_id']);
        })->get();

        return $news;
    }


    public function getNewsApi($data)
    {

        $news =  Http::get('https://newsapi.org/v2/top-headlines?country=us&apiKey='.env('NEWS_KEY'));

        return $news->json();
    }
}
