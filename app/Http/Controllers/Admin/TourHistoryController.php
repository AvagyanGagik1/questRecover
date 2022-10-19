<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UI\Crud\Create;
use App\Http\Helpers\UI\Crud\Traits\CreateUpdateTrait;
use App\Http\Helpers\UI\Crud\Update;
use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UI\Table;
use App\Http\Requests\Tour\StoreTourHistoryRequest;
use App\Http\Requests\Tour\StoreUpdateTourHistoryRequest;
use App\Models\Pictures;
use App\Models\TourHistory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TourHistoryController extends Controller
{
    use CreateUpdateTrait;

    const MODEL = TourHistory::class;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $res = TourHistory::all();
        $response = (new Table($res));
        return response()->view('admin.index', ['table' => $response]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        $response = new CreateUi(TourHistory::getModel(), [], true);
        return response()->view('admin.crud.create', ['response' => $response->getResponse()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTourHistoryRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTourHistoryRequest $request): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        $input['images'] = [];
        $tour = (new Create(self::MODEL, $input))->create();
        $model = new TourHistory;
        $path = $this->getPath($model);
        foreach ($files['images'] as $file) {
            $fileName = $this->uploadImage($path, $file);
            Pictures::create([
                'image'=>$fileName,
                'pictureable_id'=>$tour->id,
                'pictureable_type'=>'App\Models\TourHistory'
            ]);
        }
        return redirect()->route('tourHistory.index');
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
        $response = new CreateUi(TourHistory::getModel(),[],true);
        $model = TourHistory::where('id',$id)->with('images')->first()->toArray();
        return response()->view('admin.crud.edit', ['response' => $response->getResponse(), 'model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreUpdateTourHistoryRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreUpdateTourHistoryRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        if($files){
            $tour = TourHistory::find($id);
            $images = Pictures::where([['pictureable_id',$id],['pictureable_type','App\Models\TourHistory']])->get();
            foreach ($images as $image){
                $this->deleteImage($image->image);
                $image->delete();
            }
            $model = new TourHistory;
            $path = $this->getPath($model);
            foreach ($files['images'] as $file) {
                $fileName = $this->uploadImage($path, $file);
                Pictures::create([
                    'image'=>$fileName,
                    'pictureable_id'=>$tour->id,
                    'pictureable_type'=>'App\Models\TourHistory'
                ]);
            }
        }
        (new Update(self::MODEL, $input, $id))->update();
        return redirect()->route('tourHistory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $model = TourHistory::find($id);
        $images = Pictures::where([['pictureable_id',$id],['pictureable_type','App\Models\TourHistory']])->get();
        foreach ($images as $image){
            $this->deleteImage($image->image);
            $image->delete();
        }
        $model->delete();
        return redirect()->route('tourHistory.index');
    }
}
