<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends BaseController
{
   /**
     * Articles api
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll(Request $request)
    {
        $articles = Article::when($request['category_id'] ?? null, function  ($q) use($request) {
            return $q->where('category_id', $request['category_id']);
        })->when($request['search'] ?? null, function  ($q) use($request) {
            return $q->where('title', 'LIKE', '%'.$request['search'].'%');
        })->when($request['date'] ?? null, function  ($q) use($request) {
            return $q->whereDate('created_at', '=', $request['date']);
        })->when($request['resource_id'] ?? null, function  ($q) use($request) {
            return $q->where('resource_id', $request['resource_id']);
        })->get();

        return $this->sendResponse($articles, 'Articles Fetched Successfully');
    }
}
