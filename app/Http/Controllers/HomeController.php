<?php

namespace App\Http\Controllers;

use App\Http\Helpers\UI\Table;
use App\Models\DesiredPosition;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index(): Response
    {
        $is = DesiredPosition::all();
        $response = (new Table($is));
        return response()->view('home', ['table' => $response]);
    }
}
