<?php

use App\Core\Router;

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\UserController;

$router = new Router();

$router->addRoute('GET','/', [HomeController::class, 'index']);
$router->addRoute('GET', '/users', [UserController::class, 'index']);

// Authentication
$router->addRoute('GET', '/auth/register', [AuthController::class, 'registerForm']);
$router->addRoute('GET', '/auth/login', [AuthController::class, 'loginForm']);

$router->addRoute('POST', '/auth/register', [AuthController::class, 'register']);
$router->addRoute('POST', '/auth/login', [AuthController::class, 'login']);
$router->addRoute('POST', '/auth/logout', [AuthController::class, 'logout']);

return $router;
