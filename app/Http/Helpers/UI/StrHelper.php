<?php

namespace App\Http\Helpers\UI;

class StrHelper
{
    /**
     * @param string $str
     * @return array|string|string[]|null
     */
    public static function replaceUnderscoreToSpace(string $str){
        return preg_replace("/_+/", " ", $str);
    }
}
