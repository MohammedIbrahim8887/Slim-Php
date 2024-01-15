<?php

use \Psr\Container\ContainerInterface;

return function (ContainerInterface $container) {
    $container -> set('settings', function (){
        return [
            'displayErrorDetails' => true,
            'logErrorDetails'=> true,
            'logErrors' => true,
            'db' => [
                'driver' => 'mysql',
                'host' => 'http://localhost:81',
                'database' => 'prepmaster',
                'username' => 'Dough',
                'password' => '',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
            ],
        ];
    });
};