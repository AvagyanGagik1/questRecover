<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UI\Crud\Create;
use App\Http\Helpers\UI\Crud\Update;
use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UI\Table;
use App\Http\Requests\Team\StoreTeamRequest;
use App\Http\Requests\Team\StoreUpdateTeamRequest;
use App\Models\Home;
use App\Models\Position;
use App\Models\Team;
use App\Models\TeamType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TeamController extends Controller
{

    const MODEL = Team::class;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $res = Team::all();
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
        $data['position_id'] = Position::all()->toArray();
        $data['team_type_id'] = TeamType::all()->toArray();
        $response = new CreateUi(Team::getModel(), $data);
        return response()->view('admin.crud.create', ['response' => $response->getResponse()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTeamRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTeamRequest $request): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        (new Create(self::MODEL, $input, $files))->create();
        return redirect()->route('team.index');
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
        $data['position_id'] = Position::all()->toArray();
        $data['team_type_id'] = TeamType::all()->toArray();
        $response = new CreateUi(Team::getModel(), $data);
        $model = Team::find($id)->toArray();
        return response()->view('admin.crud.edit', ['response' => $response->getResponse(), 'model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreUpdateTeamRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreUpdateTeamRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        $files = $this->getFile($request);
        (new Update(self::MODEL, $input, $id, $files))->update();
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $model = Home::find($id);
        if ($model->image) {
            $this->deleteImage($model->image);
        }
        $model->delete();
        return redirect()->route('team.index');
    }
}
