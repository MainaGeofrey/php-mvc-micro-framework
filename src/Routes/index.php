<?php

use App\Controllers\HomeController;
use App\Router;

$router = new Router();

$router->get('/home', HomeController::class, 'index');

$router->dispatch();
