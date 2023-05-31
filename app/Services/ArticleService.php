<?php

namespace App\Services;

use App\Models\Article;

class ArticleService
{
    public function getAll($data)
    {
        $articles =  Article::when($data['category_id'] ?? null, function  ($q) use($data) {
            return $q->where('category_id', $data['category_id']);
        })->when($data['search'] ?? null, function  ($q) use($data) {
            return $q->where('title', 'LIKE', '%'.$data['search'].'%');
        })->when($data['date'] ?? null, function  ($q) use($data) {
            return $q->whereDate('created_at', '=', $data['date']);
        })->when($data['resource_id'] ?? null, function  ($q) use($data) {
            return $q->where('resource_id', $data['resource_id']);
        })->get();

        return $articles;
    }
}
