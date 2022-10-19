<?php

namespace App\Http\Controllers;

use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UI\Table;
use App\Models\About;
use App\Models\DesiredPosition;
use App\Models\TreatmentType;
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
        $treatment = TreatmentType::with('treatmentContent')->get();
        dd(new Table($treatment));
    }
}
