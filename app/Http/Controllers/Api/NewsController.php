<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Services\NewsService;
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
        $newsService = new NewsService();

        $news = $newsService->getAll($request);

        return $this->sendResponse($news, 'News Fetched Successfully');
    }
}
