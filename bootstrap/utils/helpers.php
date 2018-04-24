<?php


function route_name()
{
    return str_replace('.', '-', Route::currentRouteName());
}

