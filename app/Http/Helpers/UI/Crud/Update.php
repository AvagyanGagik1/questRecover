<?php

namespace App\Http\Helpers\UI\Crud;

use App\Http\Helpers\UI\Crud\Traits\CreateUpdateTrait;
use App\Http\Helpers\UI\Crud\Traits\ImageTrait;

class Update
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

    /**
     * @var int
     */
    protected $id;

    public function __construct(string $instance, array $request,int $id, $files = null)
    {
        $this->model = new $instance;
        $this->request = $request;
        $this->files = $files;
        $this->id = $id;
        $this->getFiles();
    }

    public function update()
    {
        $model = $this->model->find($this->id);
        if(array_key_exists('image',$this->request)){
            $this->deleteImage($model->image);
        }
        $model->update($this->request);
    }
}
