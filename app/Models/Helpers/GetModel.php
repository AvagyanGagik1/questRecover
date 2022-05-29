<?php

namespace App\Models\Helpers;

use App\Http\Helpers\UiInterface\UiAttributes;

trait GetModel
{
    /**
     * @return UiAttributes
     */
    public static function getModel(): UiAttributes
    {
        return new self();
    }
}
