<?php

namespace App\Http\Helpers\UI\Form;

abstract class UiResponse
{
    public $type;
    public $name;
    public $multiple = false;

    public function __construct(string $type,string $name)
    {
        $this->type = $this->setType($type);
        $this->name = $name;
    }

    /**
     * @param $type
     * @return string
     */
    private function setType($type): string
    {
        return 'admin.UI.'.$type;
    }


    public abstract function setResponse();

}
