<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use App\Router;

$router = new Router($_GET['url']);
$router->get('/', function () {
    include dirname(__DIR__) . '/views/home.php';
});
$router->get('/connexion', function () {
    include dirname(__DIR__) . '/views/auth/connexion.php';
});
$router->get('/inscription', function () {
    include dirname(__DIR__) . '/views/auth/inscription.php';
});
$router->get('/italianza-fidelite', function () {
    include dirname(__DIR__) . '/views/fidelite.php';
});
$router->get('/nos-engagements', function () {
    include dirname(__DIR__) . '/views/engagements.php';
});
/*$router->get('/posts/:id', function ($id) {
    echo "Voila l'article $id";
});*/

$router->run();

//include dirname(__DIR__) . '/views/home.php';
