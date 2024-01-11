<?php

use App\Http\Controllers\WelcomeController;

return function ($app) {
    $app->get('/', [WelcomeController::class, 'index']);

};