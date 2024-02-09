<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubscriptionResource;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends BaseController
{
    //create subscription
    public function createSubscription(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscriptions,email'
        ]);

        if($validator->fails())
        {
            return $this->error('Validacija vaseg maila nije u redu, molimo vas da proverite podatke!', $validator->errors(), 422);
        }

        $subscription = Subscription::create($request->all());

        return $this->success(new SubscriptionResource($subscription), 'Uspešno ste se prijavili na našu mailing listu.');
    }

    public function index()
    {
        $subscriptions = Subscription::all();

        return $this->success(SubscriptionResource::collection($subscriptions), 'Prikaz svih prijavljenih korisnika.');
    }

}
