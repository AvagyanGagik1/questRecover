<?php

namespace App\Http\Helpers\UI\Crud;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Destroy extends Crud
{
    protected $message;
    /**
     * @var Model
     */
    protected $model;
    /**
     * @var Request
     */
    protected $request;

    public function __construct(Model $model, Request $request)
    {
        $this->model = $model;
        $this->request = $request;
    }

    /**
     * @return bool|null
     */
    public function destroy(): ?bool
    {
        return $this->model->delete();
    }
}
