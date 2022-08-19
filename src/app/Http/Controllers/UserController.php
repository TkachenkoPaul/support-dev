<?php

namespace App\Http\Controllers;

use App\Http\Resources\Billing\UserResource;
use App\Models\Billing\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser($uid): \Illuminate\Http\JsonResponse
    {
        $user = User::query()->find($uid);
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User does not exist'],404);
        }
        return response()->json(['success' => true, 'user' => new UserResource($user)]);
    }
}
