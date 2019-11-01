<?php


namespace App\Http\Controllers\Api;

use App\Models\Location\Country;

class CountryController extends BaseController
{

    public function index()
    {
        return Country::all();
    }
}
