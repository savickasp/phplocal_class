<?php

spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $extension = '.php';
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') !== false) {
        $path = '../classes/';
    }else {
        $path = 'classes/';
    }

    include $path . $className . $extension;
}