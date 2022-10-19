<?php

namespace App\Http\Helpers\UI\Crud;

use App\Http\Helpers\UI\Crud\Traits\CreateUpdateTrait;
use App\Http\Helpers\UI\Crud\Traits\ImageTrait;
use Illuminate\Http\Request;


class Create
{
    use ImageTrait,CreateUpdateTrait;

    /**
     * @var string
     */
    protected $model;
    /**
     * @var array
     */
    protected $request;
    /**
     * @mixed
     */
    protected $files;

    public function __construct(string $instance, array $request, $files = null)
    {
        $this->model = new $instance;
        $this->request = $request;
        $this->files = $files;
        $this->getFiles();
    }

    public function create()
    {
        return $this->model->create($this->request);

    }


}
