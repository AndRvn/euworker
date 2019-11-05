<?php


namespace App\Http\Controllers\Api;

use App\Http\Resources\ExperienceResource;
use App\Models\Experience;

class ExperienceController extends BaseController
{
    public function __invoke()
    {
        return ExperienceResource::collection(Experience::all());
    }
}
