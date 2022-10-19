<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UI\Crud\Create;
use App\Http\Helpers\UI\Crud\Update;
use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UI\Table;
use App\Http\Requests\Testimonials\StoreTestimonialsRequest;
use App\Http\Requests\Testimonials\StoreUpdateTestimonialsRequest;
use App\Models\Testimonials;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TestimonialsController extends Controller
{
    const MODEL = Testimonials::class;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $res = Testimonials::all();
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
        $response = new CreateUi(Testimonials::getModel());
        return response()->view('admin.crud.create', ['response' => $response->getResponse()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTestimonialsRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTestimonialsRequest $request): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        (new Create(self::MODEL, $input, $files))->create();
        return redirect()->route('testimonials.index');
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
        $response = new CreateUi(Testimonials::getModel());
        $testimonials = Testimonials::find($id)->toArray();
        return response()->view('admin.crud.edit', ['response' => $response->getResponse(), 'model' => $testimonials]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreUpdateTestimonialsRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreUpdateTestimonialsRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        (new Update(self::MODEL, $input, $id, $files))->update();
        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $testimonials = Testimonials::find($id);
        if($testimonials->image){
           $this->deleteImage($testimonials->image);
        }
        $testimonials->delete();
        return redirect()->route('testimonials.index');
    }
}
