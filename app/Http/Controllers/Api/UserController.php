<?php


namespace App\Http\Controllers\Api;

use App\Http\Requests\UserRequest;
use App\User;

class UserController extends BaseController
{
    public function index()
    {
        return User::all();
    }

    public function create(UserRequest $request)
    {

    }
}
