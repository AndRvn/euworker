<?php


namespace App\Http\Controllers\Api;

use App\Models\Category;

class CategoryController extends BaseController
{
    public function index()
    {
        return Category::all();
    }
}
