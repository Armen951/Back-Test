<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    /**
     * Categories api
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $categories = Category::all();

        return $this->sendResponse($categories, 'Categories Fetched Successfully');
    }
}
