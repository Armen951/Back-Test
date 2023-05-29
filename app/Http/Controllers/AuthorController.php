<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Models\Author;

class AuthorController extends BaseController
{
    /**
     * Authors api
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $authors = Author::all();

        return $this->sendResponse($authors, 'Authors Fetched Successfully');
    }
}
