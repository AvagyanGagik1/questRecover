<?php

namespace App\Http\Helpers;

trait SlugHelper
{
    /**
     * @param $slug
     * @return string
     */
    private function getIdWithSlug($slug): string
    {
        $pos = strpos($slug, '-');
        return substr($slug, 0, $pos);
    }
}
