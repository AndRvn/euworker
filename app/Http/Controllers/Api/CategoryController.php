<?php


namespace App\Http\Controllers\Api;

use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends BaseController
{
    public function __invoke()
    {
        return CategoryResource::collection(Category::all());
    }
}
