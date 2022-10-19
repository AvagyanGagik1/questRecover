<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UI\Crud\Create;
use App\Http\Helpers\UI\Crud\Update;
use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UI\Table;
use App\Http\Requests\Testimonials\StoreTestimonialsHistoryRequest;
use App\Http\Requests\Testimonials\StoreUpdateTestimonialsHistoryRequest;
use App\Models\TestimonialsHistory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TestimonialsHistoryController extends Controller
{

    const MODEL = TestimonialsHistory::class;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $res = TestimonialsHistory::all();
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
        $response = new CreateUi(TestimonialsHistory::getModel());
        return response()->view('admin.crud.create', ['response' => $response->getResponse()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTestimonialsHistoryRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTestimonialsHistoryRequest $request): RedirectResponse
    {
        $input = $request->all();
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $input['video_link'], $matches);
        $input['video_link'] = 'https://www.youtube.com/embed/'.$matches[1];
        (new Create(self::MODEL, $input))->create();
        return redirect()->route('testimonialsHistory.index');
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
        $response = new CreateUi(TestimonialsHistory::getModel());
        $model = TestimonialsHistory::find($id)->toArray();
        return response()->view('admin.crud.edit', ['response' => $response->getResponse(), 'model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreUpdateTestimonialsHistoryRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreUpdateTestimonialsHistoryRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $input['video_link'], $matches);
        $input['video_link'] = 'https://www.youtube.com/embed/'.$matches[1];
        (new Update(self::MODEL, $input, $id))->update();
        return redirect()->route('testimonialsHistory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $model = TestimonialsHistory::find($id);
        $model->delete();
        return redirect()->route('homeVideo.index');
    }
}
