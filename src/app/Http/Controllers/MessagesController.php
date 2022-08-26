<?php

namespace App\Http\Controllers;

use App\Http\Resources\Billing\MessageResource;
use App\Models\Billing\MsgsMessage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MessagesController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        return MessageResource::collection(MsgsMessage::query()->orderByDesc('date')->paginate());
    }
    public function userMessages(Request $request,$uid): AnonymousResourceCollection
    {
        return MessageResource::collection(MsgsMessage::query()->where('uid',$uid)->orderByDesc('date')->paginate());
    }

    public function messageById(Request $request,$id)
    {
        $message = MsgsMessage::query()->with('replies')->find($id);
        return MessageResource::make($message);
    }
}
