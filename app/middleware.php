<?php

use Slim\App;
use Zeuxisoo\Whoops\Slim\WhoopsMiddleware;
return function (App $app) {
    $setting = $app -> getContainer()->get('settings');

    $app->addMiddleware(
        new WhoopsMiddleware()
    );
};