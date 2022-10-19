<?php

namespace App\Models\Helpers;

use App\Models\Home;
use App\Models\HomeVideo;

class UiConstants
{
    const INPUT = 'input';
    const SELECT = 'select';
    const FILE = 'file';
    const EDITOR = 'editor';

    const TEXT = 'text';
    const NUMBER = 'number';

    const SINGLE_MODELS = [HomeVideo::class,Home::class];
}
