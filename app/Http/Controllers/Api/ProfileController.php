<?php


namespace App\Http\Controllers\Api;

use App\Http\Requests\ProfileRequest;
use App\Http\Resources\ProfileResource;
use App\Models\Profile;

class ProfileController extends BaseController
{
    public function __construct()
    {
        $this->middleware('jwt');
    }

    public function create()
    {

    }

    public function show()
    {
        $user =  $this->guard()->user();

        return new ProfileResource($user->profile);
    }

    public function update(Profile $profile, ProfileRequest $request)
    {
        $profile->fillWithTranslatable($request->all());
        $profile->save();

        return $this->sendResponse('Saved');
    }
}
