<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UI\Crud\Create;
use App\Http\Helpers\UI\Crud\Update;
use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UI\Table;
use App\Http\Requests\Blog\StoreContentRequest;
use App\Http\Requests\Blog\StoreUpdateContentRequest;
use App\Models\Article;
use App\Models\Content;
use App\Models\Home;
use App\Models\TreatmentType;
use App\Models\TreatmentTypeContent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContentController extends Controller
{

    const MODEL = Content::class;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $res = Content::all();
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
        $data['article_id'] = Article::all()->toArray();
        $data['parent_id'] = Content::all()->toArray();
        $response = new CreateUi(Content::getModel(),$data);
        return response()->view('admin.crud.create', ['response' => $response->getResponse()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContentRequest $request
     * @return RedirectResponse
     */
    public function store(StoreContentRequest $request): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        (new Create(self::MODEL, $input, $files))->create();
        return redirect()->route('content.index');
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
        $data['article_id'] = Article::all()->toArray();
        $data['parent_id'] = collect(Content::where('parent_id',null)->get()->filter(function ($content) use($id){
            return $content->id != $id?$content:false;
        }))->toArray();
        $response = new CreateUi(Content::getModel(),$data);
        $model = Content::find($id)->toArray();
        return response()->view('admin.crud.edit', ['response' => $response->getResponse(), 'model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreUpdateContentRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreUpdateContentRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        (new Update(self::MODEL, $input, $id, $files))->update();
        return redirect()->route('content.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $model = Content::find($id);
        $model->delete();
        return redirect()->route('content.index');
    }
}
