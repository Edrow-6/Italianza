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
                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/chart-bar -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Pizzas
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Desc
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/cursor-click -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Entrées & Salades
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Desc
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Desserts & Glaces
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Desc
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/view-grid -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Boissons
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Desc
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="px-5 py-5 space-y-6 bg-gray-50 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                <div class="flow-root">
                                    <a href="#" class="flex items-center p-3 -m-3 text-base font-medium text-gray-900 rounded-md hover:bg-gray-100">
                                        <!-- Heroicon name: outline/play -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="ml-3">Bouton 1</span>
                                    </a>
                                </div>

                                <div class="flow-root">
                                    <a href="#" class="flex items-center p-3 -m-3 text-base font-medium text-gray-900 rounded-md hover:bg-gray-100">
                                        <!-- Heroicon name: outline/phone -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <span class="ml-3">Bouton 2</span>
                                    </a>
                                </div>
                                <div class="flow-root">
                                    <a href="#" class="flex items-center p-3 -m-3 text-base font-medium text-gray-900 rounded-md hover:bg-gray-100">
                                        <!-- Heroicon name: outline/phone -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <span class="ml-3">Bouton 3</span>
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
            </div>
        </div>
    </div>

</div>