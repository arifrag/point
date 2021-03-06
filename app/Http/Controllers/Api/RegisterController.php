<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Resources\Master\User\UserResource;
use App\Http\Requests\Master\User\StoreUserRequest;

class RegisterController extends ApiController
{
    public function store(StoreUserRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return new UserResource($user);
    }
}
