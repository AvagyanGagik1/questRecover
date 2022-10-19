<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UI\Crud\Create;
use App\Http\Helpers\UI\Crud\Update;
use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UI\Table;
use App\Http\Requests\Treatment\StoreTreatmentTypeContentRequest;
use App\Http\Requests\Treatment\StoreUpdateTreatmentTypeContentRequest;
use App\Models\TreatmentType;
use App\Models\TreatmentTypeContent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TreatmentTypeContentController extends Controller
{

    const MODEL = TreatmentTypeContent::class;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $res = TreatmentTypeContent::all()->map(function ($treatment){
            $treatment->treatment_type_id = $treatment->getRelationName();
            return $treatment;
        });
        $response = (new Table($res));
        return response()->view('admin.index',['table'=>$response]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        $data['treatment_type_id'] = TreatmentType::all()->toArray();
        $response = new CreateUi(TreatmentTypeContent::getModel(),$data);
        return response()->view('admin.crud.create', ['response' => $response->getResponse()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTreatmentTypeContentRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTreatmentTypeContentRequest $request): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        (new Create(self::MODEL, $input, $files))->create();
        return redirect()->route('treatmentTypeContent.index');
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
        $data['treatment_type_id'] = TreatmentType::all()->toArray();
        $response = new CreateUi(TreatmentTypeContent::getModel(),$data);
        $model = TreatmentTypeContent::find($id)->toArray();
        return response()->view('admin.crud.edit', ['response' => $response->getResponse(), 'model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreUpdateTreatmentTypeContentRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreUpdateTreatmentTypeContentRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        (new Update(self::MODEL, $input, $id, $files))->update();
        return redirect()->route('treatmentTypeContent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $model = TreatmentTypeContent::find($id);
        $model->delete();
        return redirect()->route('treatmentTypeContent.index');
    }
}
