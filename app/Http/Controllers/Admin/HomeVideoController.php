<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UI\Crud\Create;
use App\Http\Helpers\UI\Crud\Update;
use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UI\Table;
use App\Http\Requests\Home\StoreHomeVideoRequest;
use App\Http\Requests\Home\StoreUpdateHomeVideoRequest;
use App\Models\HomeVideo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class HomeVideoController extends Controller
{

    const MODEL = HomeVideo::class;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $res = HomeVideo::all();
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
        $response = new CreateUi(HomeVideo::getModel());
        return response()->view('admin.crud.create', ['response' => $response->getResponse()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreHomeVideoRequest $request
     * @return RedirectResponse
     */
    public function store(StoreHomeVideoRequest $request): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $input['video_link'], $matches);
        $input['video_link'] = 'https://www.youtube.com/embed/'.$matches[1];
        (new Create(self::MODEL, $input, $files))->create();
        return redirect()->route('homeVideo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param HomeVideo $homeVideo
     * @return void
     */
    public function show(HomeVideo $homeVideo)
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
        $response = new CreateUi(HomeVideo::getModel());
        $model = HomeVideo::find($id)->toArray();
        return response()->view('admin.crud.edit', ['response' => $response->getResponse(), 'model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreUpdateHomeVideoRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(StoreUpdateHomeVideoRequest $request, $id): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $input['video_link'], $matches);
        $input['video_link'] = 'https://www.youtube.com/embed/'.$matches[1];
        (new Update(self::MODEL, $input, $id, $files))->update();
        return redirect()->route('homeVideo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $model = HomeVideo::find($id);
        $model->delete();
        return redirect()->route('homeVideo.index');
    }
}
