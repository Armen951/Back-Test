<?php

namespace App\Services;

use App\Models\Author;
use App\Models\Category;
use App\Models\Resource;

class FiltersService
{
    public function getCategories()
    {
        return Category::all();
    }

    public function getAuthors()
    {
        return Author::all();
    }

    public function getResources()
    {
        return Resource::all();
    }
}
