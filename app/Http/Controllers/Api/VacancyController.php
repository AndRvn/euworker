<?php


namespace App\Http\Controllers\Api;

use App\Http\Requests\VacancyRequest;
use App\Models\Vacancy;

class VacancyController extends BaseController
{
    public function index()
    {
        return Vacancy::all();
    }

    public function create(VacancyRequest $request)
    {

    }
}
