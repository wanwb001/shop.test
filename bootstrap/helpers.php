<?php
/**
 * Created by PhpStorm.
 * User: moweibao
 * Date: 2019-08-26
 * Time: 10:54
 */

function test_helper() {
    return 'OK';
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}