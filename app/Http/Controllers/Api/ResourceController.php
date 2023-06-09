<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Services\FiltersService;
use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends BaseController
{
    /**
     * Resources api
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $filtersService = new FiltersService();

        return $this->sendResponse($filtersService->getResources(), 'Resources Fetched Successfully');
    }


    /**
     * Resources 3rd Party api
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllApi()
    {
        $filtersService = new FiltersService();

        return $this->sendResponse($filtersService->getResourceApi(), 'Resources Api Fetched Successfully');
    }
}
