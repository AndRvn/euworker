<?php


namespace App\Http\Controllers\Api;


use App\Http\Resources\CityResource;
use App\Models\Location\City;

class CityController extends BaseController
{
    public function __invoke()
    {
        return CityResource::collection(City::all());
    }
}
