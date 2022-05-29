<?php

namespace App\Http\Controllers;

use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UI\Table;
use App\Models\About;
use App\Models\DesiredPosition;
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
        dd(1);
//        $create = new CreateUi(About::getModel());
//        return response()->view('admin.crud.create', ['response' => $create->getResponse()]);
        $is = DesiredPosition::all();
        $response = (new Table($is));
        return response()->view('admin.table',['table'=>$is]);
    }
}
