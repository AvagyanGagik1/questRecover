<?php

namespace App\Http\Helpers\UI\Crud\Traits;

use Illuminate\Http\Request;

trait Files
{
    public function getFile(Request $request)
    {
        return $request->file('image') ?? $request->allFiles();
    }
}
