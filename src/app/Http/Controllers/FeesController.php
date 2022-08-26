<?php

namespace App\Http\Controllers;

use App\Http\Resources\Billing\FeeResource;
use App\Models\Billing\Fee;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class FeesController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        return FeeResource::collection(Fee::query()->paginate());
    }

    public function userFees(Request $request,$billId): AnonymousResourceCollection
    {
        return FeeResource::collection(Fee::query()->where('bill_id',$billId)->paginate());
    }
}
