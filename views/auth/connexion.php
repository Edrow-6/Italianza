<?php
// Inclusion du backend pour les fonctions
require_once dirname(__DIR__) . '/backend/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    // Ajout du contenu du head
    include dirname(__FILE__) . '/components/head.php';
    ?>
</head>

<body>
    <?php
    // Ajout de la barre de navigation
    include dirname(__FILE__) . '/components/navbar.php';
    ?>

    <div class="py-12 bg-white">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-bold tracking-wide text-green-500 uppercase">NOUVEAUTÉ</h2>
                <p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl">
                    COMMANDEZ EN LIGNE
                </p>
            </div>
            <div class="justify-center mt-10 sm:mt-8 sm:flex">
                <div class="rounded-md shadow">
                    <a href="#" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white transition duration-200 ease-in-out transform bg-yellow-500 border border-transparent rounded-md hover:scale-105 hover:bg-yellow-600 md:py-4 md:text-lg md:px-10">
                        <i class="text-2xl far fa-motorcycle"></i>
                        <span class="ml-3">LIVRAISON</span>
                    </a>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="#" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white transition duration-200 ease-in-out transform bg-yellow-500 border border-transparent rounded-md hover:scale-105 hover:bg-yellow-600 md:py-4 md:text-lg md:px-10">
                        <i class="text-2xl far fa-store-alt"></i>
                        <span class="ml-3">CLICK & COLLECT</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <div class="flex items-center justify-center w-full bg-gray-200">
        <div class="flex flex-col w-full px-4text-white md:w-2/3">
            <div class="flex flex-col">
                <p class="w-full mt-12 text-center text-gray-600">Copyright © 2021 Italianza Corp.</p>
                <p class="w-full mb-12 text-center text-gray-600">Pour votre santé, mangez au moins cinq fruits et légumes par jour <a href="http://www.mangerbouger.fr">WWW.MANGERBOUGER.FR</a></p>
            </div>
        </div>
    </div>
</body>

</html>