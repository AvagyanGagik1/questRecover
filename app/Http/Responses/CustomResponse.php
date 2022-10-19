<?php

namespace App\Http\Responses;

use App\Http\Helpers\UI\Table;
use App\Http\Helpers\UiInterface\UiAttributes;
use Illuminate\Database\Eloquent\Collection;
use \Illuminate\Http\Response;


class CustomResponse extends Response
{
    protected $table;

    public function __construct(Collection $model,  $content = '', $status = 200, array $headers = [])
    {
        parent::__construct($content, $status, $headers);
        $this->table = new Table($model);
    }

    public function getTable(): Table
    {
        return $this->table;
    }

    public function getCreateFrom()
    {

    }

}
