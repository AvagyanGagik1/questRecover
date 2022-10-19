<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\CallBack\StoreCallBackRequest;
use Illuminate\Http\Request;

class CallbackRequest extends Controller
{
    public function index(StoreCallBackRequest $request)
    {
        $input = $request->all();
        CallbackRequest::create($input);
        return redirect()->back()->with(['message'=> 'Your Callback request successfully send!']);
    }
}
