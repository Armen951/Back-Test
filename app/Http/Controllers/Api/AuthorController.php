<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Services\FiltersService;

class AuthorController extends BaseController
{
    /**
     * Authors api
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $filtersService = new FiltersService();

        return $this->sendResponse($filtersService->getAuthors(), 'Authors Fetched Successfully');
    }
}
