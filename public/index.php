<?php
require dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/backend/functions.php';

use App\Router\Router;

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
$router->get('/pizzas', function () {
    include dirname(__DIR__) . '/views/pizzas.php';
});
$router->post('/pizzas', function () {
    // Si l'utilisateur a cliqué sur le bouton "Ajouter" sur la page du produit, nous pouvons vérifier les données du formulaire.
    if (isset($_POST['id'], $_POST['taille'], $_POST['quantite']) && is_numeric($_POST['id']) && is_string($_POST['taille']) && is_numeric($_POST['quantite'])) {
        // Définition des variables de la méthode POST de façon à ce que nous puissions les identifier facilement, et s'assurer qu'elles sont du bon type.
        $id = (int)$_POST['id'];
        $taille = (string)$_POST['taille'];
        $quantite = (int)$_POST['quantite'];

        //Préparation de l'instruction SQL, nous vérifions essentiellement si le produit existe dans notre base de données.
        $conn = connectDB();
        $stmt = $conn->prepare('SELECT * FROM produit_pizza WHERE id = ?');
        $stmt->execute([$_POST['id']]);
        // Récupère le produit depuis la base de données et renvoie le résultat sous forme de tableau.
        $produit_pizza = $stmt->fetch(PDO::FETCH_ASSOC);
        // Vérifie si le produit existe (le tableau n'est pas vide)
        if ($produit_pizza && $quantite > 0) {
            // Le produit existe dans la base de données, maintenant nous pouvons créer/mettre à jour la variable de session pour le panier.
            if (isset($_SESSION['panier']) && is_array($_SESSION['panier'])) {
                if (array_key_exists($id, $_SESSION['panier'])) {
                    // Le produit existe dans le panier, il suffit de mettre à jour la quantité.
                    $_SESSION['panier'][$id] += $quantite;
                } else {
                    // Le produit n'est pas dans le panier, ajoutons-le
                    $_SESSION['panier'][$id] = $quantite;
                }
            } else {
                // Il n'y a aucun produit dans le panier, ceci ajoutera le premier produit au panier.
                $_SESSION['panier'] = array($id => $quantite);
            }
        }
        // Redirection vers la page source.
        include dirname(__DIR__) . '/views/pizzas.php';
    }
    /*ANCIEN -> if (isset($_SESSION['panier'])) {
        $panier = $_SESSION['panier'];
    } else {
        $_SESSION['panier'] = null;
    }
    $panier["id_pizza"] = $_POST['ajouter'];
    $panier["taille"] = $_POST['taille'];
    $_SESSION['panier'] = $panier;
    header("Refresh:0");*/
});
$router->get('/nos-engagements', function () {
    include dirname(__DIR__) . '/views/engagements.php';
});
/*$router->get('/posts/:id', function ($id) {
    echo "Voila l'article $id";
});*/

$router->run();

//include dirname(__DIR__) . '/views/home.php';
