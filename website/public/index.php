<?php // public/index.php

require_once __DIR__.'/../vendor/autoload.php';

use Vectorface\SnappyRouter\Config\Config;
use Vectorface\SnappyRouter\Handler\ControllerHandler;

$config = new Config(array(
    Config::KEY_DEBUG => true,
    Config::KEY_DI => 'TopCaster\\app\\Models\\SettingsDi',
    Config::KEY_HANDLERS => array(
        'PageHandler' => array(
            Config::KEY_CLASS => 'Vectorface\\SnappyRouter\\Handler\\ControllerHandler',
            Config::KEY_OPTIONS => array(
                Config::KEY_NAMESPACES => 'TopCaster\\app\\Controllers',
                ControllerHandler::KEY_BASE_PATH => '/',
                ControllerHandler::KEY_VIEWS => array(
                    ControllerHandler::KEY_VIEWS_PATH => realpath(__DIR__.'/../app/Views')
                )
            )
        )
    )
));
$router = new Vectorface\SnappyRouter\SnappyRouter($config);
echo $router->handleRoute();