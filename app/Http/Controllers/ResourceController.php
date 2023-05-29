<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
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
        $resources = Resource::all();

        return $this->sendResponse($resources, 'Resources Fetched Successfully');
    }
}
