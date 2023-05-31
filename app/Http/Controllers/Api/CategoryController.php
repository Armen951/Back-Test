<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Services\FiltersService;

class CategoryController extends BaseController
{
    /**
     * Categories api
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $filtersService = new FiltersService();

        return $this->sendResponse($filtersService->getCategories(), 'Categories Fetched Successfully');
    }
}
