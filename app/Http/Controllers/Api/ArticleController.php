<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Services\ArticleService;
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
        $articleService = new ArticleService();

        $articles = $articleService->getAll($request);

        return $this->sendResponse($articles, 'Articles Fetched Successfully');
    }
}
