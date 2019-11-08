<?php


namespace App\Http\Controllers\Api;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
    protected $currentUser;

    public function __construct()
    {
        $this->currentUser = $this->guard()->user();
    }

    public function index()
    {

    }

    public function create(UserRequest $request)
    {

    }

    public function store()
    {

    }

    public function update(UserRequest $request)
    {
        $this->currentUser->update($request->all());

        return $this->sendResponse('Saved');
    }

    public function changePassword(UserRequest $request)
    {
        if (!Hash::check($request->get('current_password'), $this->currentUser->password)) {
            return $this->sendError('Current password does not match', [], 422);
        }

        $this->currentUser->password = $request->get('current_password');

        return $this->sendResponse('Password was changed');
    }

}
