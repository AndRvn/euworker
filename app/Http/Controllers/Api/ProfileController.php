<?php


namespace App\Http\Controllers\Api;

use App\Http\Resources\ProfileResource;
use App\Models\Profile;
use Illuminate\Http\Request;

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

    public function store(int $id, Request $request)
    {
        $profile = Profile::findOrFail($id);
        $profile->fillWithTranslatable($request->all());
        $profile->save();

        return $this->sendResponse('Saved');
    }
}
