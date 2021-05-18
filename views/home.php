<?php require_once dirname(__DIR__) . '/backend/functions.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- CONTENU HEAD -->
    <?php include dirname(__FILE__) . '/components/head.php'; ?>
</head>

<body>
    <!-- BARRE DE NAVIGATION -->
    <?php include dirname(__FILE__) . '/components/navbar.php'; ?>
    <header>
        <div class="w-full bg-center bg-cover" style="height:32rem; background-image: url(https://c0.wallpaperflare.com/preview/378/110/547/pizza-oven-fire-red.jpg);">
            <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
                <div class="text-center">
                    <h1 class="text-5xl font-extrabold text-white uppercase">Italianza</h1>
                    <span class="text-3xl font-bold text-yellow-400">Pizzas italiennes authentiques cuites au feu de bois</span>
                </div>
            </div>
        </div>
    </header>

    <div class="py-12 bg-white">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-bold tracking-wide text-green-500 uppercase">NOUVEAUTÉ</h2>
                <p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 uppercase sm:text-4xl">
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
    <div class="py-12 bg-white">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-bold tracking-wide text-red-500 uppercase">Covid-19</h2>
                <p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 uppercase sm:text-4xl">
                    Repas sur place
                </p>
            </div>
            <div class="justify-center mt-10 sm:mt-8 sm:flex">
                <div class="rounded-md shadow">
                    <a href="#" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white uppercase transition duration-200 ease-in-out transform bg-red-500 border border-transparent rounded-md hover:scale-105 hover:bg-red-600 md:py-4 md:text-lg md:px-10">
                        <i class="text-2xl far fa-virus"></i>
                        <span class="ml-3">Victime de son succès</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- BAS DE PAGE -->
    <?php include dirname(__FILE__) . '/components/footer.php'; ?>
</body>

</html>