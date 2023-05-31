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


       /**
     * News Feed 3rd party api
     *
     * @return \Illuminate\Http\Response
     */
    public function getNewsApi(Request $request)
    {
        $newsService = new NewsService();

        $news = $newsService->getNewsApi($request ?? []);

        return $this->sendResponse($news, 'News Api Fetched Successfully');
    }
}
