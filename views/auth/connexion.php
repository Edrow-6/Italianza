<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- CONTENU HEAD -->
    <?php include dirname(__FILE__) . '/../components/head.php'; ?>
</head>

<body>
    <!-- BARRE DE NAVIGATION -->
    <?php include dirname(__FILE__) . '/../components/navbar.php'; ?>

    <div class="flex items-center justify-center min-h-screen px-4 bg-gray-50 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="w-auto h-12 mx-auto" src="assets/images/pizza_logo.png" alt="Pizza Logo">
                <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900">
                    Se connecter à votre compte
                </h2>
                <p class="mt-2 text-sm text-center text-gray-600">
                    Ou
                    <a href="/inscription" class="font-medium text-yellow-500 hover:text-yellow-400">
                        S'inscrire pour profiter de tout nos services
                    </a>
                </p>
            </div>
            <form class="mt-8 space-y-6" action="#" method="POST">
                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm">
                    <div>
                        <label for="email-address" class="sr-only">Adresse mail</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-none appearance-none rounded-t-md focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 focus:z-10 sm:text-sm" placeholder="Adresse mail">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Mot de passe</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-none appearance-none rounded-b-md focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 focus:z-10 sm:text-sm" placeholder="Mot de passe">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember_me" type="checkbox" class="w-4 h-4 text-yellow-500 border-gray-300 rounded focus:ring-yellow-400">
                        <label for="remember_me" class="block ml-2 text-sm text-gray-900">
                            Se souvenir de moi
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-yellow-500 hover:text-yellow-400">
                            Mot de passe oublié ?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-yellow-500 border border-transparent rounded-md group hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-400">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <!-- Heroicon name: solid/lock-closed -->
                            <svg class="w-5 h-5 text-yellow-400 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        Connexion
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- BAS DE PAGE -->
    <?php include dirname(__FILE__) . '/../components/footer.php'; ?>
</body>

</html>