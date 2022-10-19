<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UI\Table;
use App\Models\Benefits;
use App\Models\CallbackRequest;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return response()->view('admin.dashboard');
    }

    /**
     * @return Response
     */
    public function callback(): Response
    {
        $res = CallbackRequest::all();
        $response = (new Table($res));
        return response()->view('admin.index',['table'=>$response]);
    }
    /**
     * @return Response
     */
    public function benefit(): Response
    {
        $res = Benefits::all();
        $response = (new Table($res));
        return response()->view('admin.index',['table'=>$response]);
    }
}
