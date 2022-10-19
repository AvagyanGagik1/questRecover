<?php

namespace App\Http\Helpers\UI;

use Illuminate\Database\Eloquent\Collection;

class Table
{

    const FIRST_ELEMENT = 0;

    /**
     * @param Collection $collection
     */
    public function __construct(Collection $collection)
    {
        $this->collection = $collection->toArray();
        if(!$collection->isEmpty()){
            $this->setTitle($collection);
            $this->setHeaders();
            $this->setData();
            $this->setModel($collection);
        }
    }

    private $collection;
    public $headers;
    public $data;
    public $title;
    public $model;

    /**
     * @return void
     */
    private function setHeaders(): void
    {
        foreach ($this->collection[self::FIRST_ELEMENT] as $key => $collection) {
            $this->headers[] = StrHelper::replaceUnderscoreToSpace($key);
        }
    }

    /**
     * @return void
     */
    private function setData()
    {
        foreach ($this->collection as $key => $value){
            $this->data[$key] = $value;
        }
    }

    /**
     * @param Collection $collection
     */
    private function setTitle(Collection $collection): void
    {
        $this->title = StrHelper::replaceUnderscoreToSpace($collection[self::FIRST_ELEMENT]->getTable());
    }

    private function setModel(Collection $collection)
    {
        $this->model = get_class($collection[self::FIRST_ELEMENT]);
    }
}
