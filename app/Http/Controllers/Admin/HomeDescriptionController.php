<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UI\Crud\Create;
use App\Http\Helpers\UI\Crud\Update;
use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UI\Table;
use App\Http\Requests\Home\StoreHomeDescriptionRequest;
use App\Http\Requests\Home\StoreUpdateHomeDescriptionRequest;
use App\Models\HomeDescription;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class HomeDescriptionController extends Controller
{
    const MODEL = HomeDescription::class;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $res = HomeDescription::all();
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
        $response = new CreateUi(HomeDescription::getModel());
        return response()->view('admin.crud.create', ['response' => $response->getResponse()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreHomeDescriptionRequest $request
     * @return RedirectResponse
     */
    public function store(StoreHomeDescriptionRequest $request): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        (new Create(self::MODEL, $input, $files))->create();
        return redirect()->route('homeDescription.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
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
        $response = new CreateUi(HomeDescription::getModel());
        $model = HomeDescription::find($id)->toArray();
        return response()->view('admin.crud.edit', ['response' => $response->getResponse(), 'model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreUpdateHomeDescriptionRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreUpdateHomeDescriptionRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        (new Update(self::MODEL, $input, $id, $files))->update();
        return redirect()->route('homeDescription.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $model = HomeDescription::find($id);
        if($model->image){
            $this->deleteImage($model->image);
        }
        $model->delete();
        return redirect()->route('homeDescription.index');
    }
}
