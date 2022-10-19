<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UI\Crud\Create;
use App\Http\Helpers\UI\Crud\Update;
use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UI\Table;
use App\Http\Requests\Treatment\StoreTreatmentDescriptionRequest;
use App\Http\Requests\Treatment\StoreUpdateTreatmentDescriptionRequest;
use App\Models\Home;
use App\Models\TreatmentDescription;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TreatmentDescriptionController extends Controller
{

    const MODEL = TreatmentDescription::class;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $res = TreatmentDescription::all();
        $response = (new Table($res));
        return response()->view('admin.index',['table'=>$response]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $response = new CreateUi(TreatmentDescription::getModel());
        return response()->view('admin.crud.create', ['response' => $response->getResponse()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTreatmentDescriptionRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTreatmentDescriptionRequest $request): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        (new Create(self::MODEL, $input, $files))->create();
        return redirect()->route('treatmentDescription.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(int $id): Response
    {
        $response = new CreateUi(TreatmentDescription::getModel());
        $model = TreatmentDescription::find($id)->toArray();
        return response()->view('admin.crud.edit', ['response' => $response->getResponse(), 'model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreUpdateTreatmentDescriptionRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreUpdateTreatmentDescriptionRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        (new Update(self::MODEL, $input, $id, $files))->update();
        return redirect()->route('treatmentDescription.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $model = TreatmentDescription::find($id);

        $model->delete();
        return redirect()->route('treatmentDescription.index');
    }
}
