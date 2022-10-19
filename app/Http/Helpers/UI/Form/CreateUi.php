<?php

namespace App\Http\Helpers\UI\Form;

use App\Http\Helpers\UI\Form\responseTypes\Editor;
use App\Http\Helpers\UI\Form\responseTypes\File;
use App\Http\Helpers\UI\Form\responseTypes\Input;
use App\Http\Helpers\UI\Form\responseTypes\Select;
use App\Http\Helpers\UiInterface\UiAttributes;
use App\Models\Helpers\UiConstants;

class CreateUi
{
    protected $attributes;
    protected $response;
    protected $data;
    protected $multiple;

    public function __construct(UiAttributes $model, $data = [], $multiple = false)
    {
        $this->attributes = $model->getUiAttributes();
        $this->data = $data;
        $this->multiple = $multiple;
        $this->setUiResponseAttributes();
    }

    public function setUiResponseAttributes()
    {
        foreach ($this->attributes as $key => $attribute) {
            $this->response[$key] = $this->setResponse($attribute, $key, $this->data);
        }
    }

    private function setResponse($attribute, $key, $data)
    {
        switch (true) {
            case ($attribute === UiConstants::INPUT);
                return new Input($attribute, $key);
            case ($attribute === UiConstants::FILE);
                return new File($attribute, $key, $this->multiple);
            case ($attribute === UiConstants::SELECT);
                return new Select($attribute, $key, $data[$key]);
            case ($attribute === UiConstants::EDITOR);
                return new Editor($attribute, $key);
        }
    }

    public function getResponse()
    {
        return $this->response;
    }
}
