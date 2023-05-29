<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends BaseController
{
       /**
     * News Feed api
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll(Request $request)
    {
        $news = News::when($request['category_id'] ?? null, function  ($q) use($request) {
            return $q->where('category_id', $request['category_id']);
        })->when($request['author_id'] ?? null, function  ($q) use($request) {
            return $q->where('author_id', $request['author_id']);
        })->when($request['resource_id'] ?? null, function  ($q) use($request) {
            return $q->where('resource_id', $request['resource_id']);
        })->get();

        return $this->sendResponse($news, 'News Fetched Successfully');
    }
}
