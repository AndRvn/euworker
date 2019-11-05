<?php


namespace App\Http\Controllers\Api;


use App\Http\Resources\CountryResource;
use App\Models\Location\Country;

class CountryController extends BaseController
{
    public function __invoke()
    {
        return CountryResource::collection(Country::all());
    }
}
