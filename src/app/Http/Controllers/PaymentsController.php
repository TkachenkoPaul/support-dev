<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Resources\Billing\PaymentResource;
use App\Models\Billing\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        return PaymentResource::collection(Payment::query()->orderByDesc('date')->paginate());
    }
    public function userPayments(Request $request,$billId): AnonymousResourceCollection
    {
        return PaymentResource::collection(Payment::query()->where('bill_id',$billId)->paginate());
    }
}
