<?php


namespace App\Repositories;

use App\Models\Location\Country;
use App\Repositories\Interfaces\CountryRepositoryInterface;

class CountryRepository implements CountryRepositoryInterface
{
    public function all()
    {
        return  Country::all();
    }

}
