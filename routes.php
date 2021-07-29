<?php

use App\Middleware\CheckLogin;

$middleware = new CheckLogin;

$router->get('', 'App/Http/Controllers/HomeController.php@index');

$router->get('users', 'App/Http/Controllers/UserController.php@index');
$router->get('users/create', 'App/Http/Controllers/UserController.php@create');

$router->get('educations', 'App/Http/Controllers/EducationController.php@index');

$router->get('login', 'App/Http/Controllers/LoginController.php');
$router->get('logout', 'App/Http/Controllers/LoginController.php@logout');