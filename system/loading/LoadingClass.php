<?php

class LoadingClass
{
    protected   $path   =   [
        'web'   =>  '',
    ];

    public static function register($clspath)
    {
        $clspath = trim($clspath, '\\/');
        $clspath = explode('\\', $clspath);
        require_once APP_PATH . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $clspath) . '.php';
    }
}

spl_autoload_register(__NAMESPACE__ . '\LoadingClass::register');