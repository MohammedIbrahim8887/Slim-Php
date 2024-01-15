<?php
// dependencies.php

use App\Http\Controllers\WelcomeController;
use App\Http\Models\Student;
use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Illuminate\Database\Capsule\Manager as Capsule;

$container['db'] = function ($container) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};

$container[Student::class] = function ($c) {
    return new Student;
};

$container[WelcomeController::class] = function ($c) {
    $studentModel = $c->get(Student::class);

    return new WelcomeController($studentModel);
};
