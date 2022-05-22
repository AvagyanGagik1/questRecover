<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    /**
     * @return Response
     */
    public function __invoke(): Response
    {
        return response()->view('admin.index');
    }
}
