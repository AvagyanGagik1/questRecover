<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Benefit\StoreBenefitRequest;
use App\Models\Benefits;
use Illuminate\Http\Request;

class BenefitsController extends Controller
{
    public function index(StoreBenefitRequest $request)
    {
        $input = $request->all();
        Benefits::create($input);
        return redirect()->back()->with(['message'=> 'Your benefit request successfully send!']);
    }
}
