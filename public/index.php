<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use App\Router;

$router = new Router($_GET['url']);
$router->get('/', function () {
    echo "Bienvenue sur ma homepage !";
});
$router->get('/posts/:id', function ($id) {
    echo "Voila l'article $id";
});
$router->run();

//include dirname(__DIR__) . '/views/home.php';
