<div class="relative bg-gray-100 shadow-lg">
    <div class="px-4 mx-auto max-w-7xl sm:px-6">
        <div class="flex items-center justify-between py-6 border-b-2 border-gray-100 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="/">
                    <span class="sr-only">Italianza</span>
                    <img class="w-auto h-8 sm:h-10" src="assets/images/pizza_logo.png" alt="Italianza Logo">
                </a>
            </div>
            <nav class="hidden space-x-10 md:flex">
                <div class="relative" x-data="{ open: false }">
                    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                    <button @click="open = true" type="button" class="inline-flex items-center text-base font-medium text-gray-500 bg-gray-100 rounded-md group hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500" aria-expanded="false">
                        <span class="uppercase">La carte</span>
                        <svg class="w-5 h-5 ml-2 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="open" @click.away="open = false" class="absolute z-10 w-screen max-w-md px-2 mt-3 -ml-4 transform sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                        <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                                <a href="/pizzas" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                    <i class="text-2xl text-yellow-500 far fa-pizza"></i>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Pizzas
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Une large gamme de pizzas, pour tout les gôuts
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                    <i class="text-2xl text-yellow-500 far fa-salad"></i>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Entrées & Salades
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Des végétables pour les tortues, les végans et les viandophobes
                                        </p>
                                    </div>
                                </a>

                                <a href="/desserts" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                    <i class="text-2xl text-yellow-500 far fa-ice-cream"></i>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Desserts & Glaces
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Découvrez la fraîcheur de nos glaces faites maisons
                                        </p>
                                    </div>
                                </a>

                                <a href="/boissons" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                    <i class="text-2xl text-yellow-500 far fa-cocktail"></i>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Boissons
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            De la bonne limonade ou un soda pour vous hydrater
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="px-5 py-5 space-y-6 bg-blue-500 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                <div class="flow-root">
                                    <a class="flex items-center p-3 -m-3 text-base font-medium text-white rounded-md hover:bg-blue-600">
                                        <i class="text-2xl text-white fad fa-ticket"></i>
                                        <span class="ml-3 font-bold uppercase">5% de réduction avec le code PIDZAW5</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/italianza-fidelite" class="text-base font-medium text-gray-500 uppercase hover:text-gray-900">
                    Italianza Fidélité
                </a>
                <a href="/nos-engagements" class="text-base font-medium text-gray-500 uppercase hover:text-gray-900">
                    Nos engagements
                </a>
            </nav>
            <div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0">
                <a href="/connexion" class="text-base font-medium text-gray-500 whitespace-nowrap hover:text-gray-900">
                    Connexion
                </a>
                <a href="/inscription" class="inline-flex items-center justify-center px-4 py-2 ml-8 text-base font-medium text-white transition duration-200 ease-in-out transform bg-yellow-500 border border-transparent rounded-md shadow-sm hover:scale-105 whitespace-nowrap hover:bg-yellow-600">
                    S'inscrire
                </a>
                <a href="" class="inline-flex items-center justify-center px-4 py-2 ml-8 text-base font-medium text-white transition duration-200 ease-in-out transform bg-transparent border border-transparent rounded-md hover:scale-110 whitespace-nowrap">
                    <i class="text-2xl text-gray-400 far fa-shopping-cart"></i>
                </a>
            </div>
        </div>
    </div>

</div>