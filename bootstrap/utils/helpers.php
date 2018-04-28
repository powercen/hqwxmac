<?php

use Illuminate\Http\UploadedFile;

function route_name()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function generate_filename(UploadedFile $file, $format='Ym/d')
{
    $ext = $file->getClientOriginalExtension();
    return date($format, time()) . '_' .str_random(6).'.'.$ext;
}
