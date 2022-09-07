<?php

namespace App\Http\Controllers;

use App\Http\Requests\Billing\Users\GetUsersRequest;
use App\Http\Resources\Billing\UserCollection;
use App\Http\Resources\Billing\UserResource;
use App\Models\Billing\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function getUser($uid): JsonResponse
    {
        $user = User::query()->find($uid);
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User does not exist'],404);
        }
        return response()->json(['user' => new UserResource($user)]);
    }

    public function getUsers(GetUsersRequest $request): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $users =  User::query()->paginate($request->perpage);
        return UserResource::collection($users);
    }

}
