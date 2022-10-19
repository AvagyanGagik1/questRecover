<?php

namespace App\Http\Helpers\UI\Form\responseTypes;

use App\Http\Helpers\UI\Form\UiResponse;
use App\Http\Helpers\UI\StrHelper;

class Input extends UiResponse
{
    public $placeholder;
    public $id;
    public $label;

    public function __construct(string $type, string $name)
    {
        parent::__construct($type, $name);
        $this->setResponse();
    }

    public function setResponse()
    {
        $this->placeholder = StrHelper::replaceUnderscoreToSpace($this->name);
        $this->id = StrHelper::replaceUnderscoreToDash($this->name);
        $this->label = StrHelper::replaceUnderscoreToSpace($this->name);
    }
}
