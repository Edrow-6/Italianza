<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- CONTENU HEAD -->
    <?php include dirname(__FILE__) . '/components/head.php'; ?>
</head>

<body class="bg-gray-50">
    <!-- BARRE DE NAVIGATION -->
    <?php include dirname(__FILE__) . '/components/navbar.php'; ?>

    <?php var_dump($_SESSION['panier']); ?>
    <div class="container mx-auto my-5">
        <div class="grid grid-cols-3 gap-4 mx-10 gap-x-12 justify-items-center ">

            <?php
            $Pizza = getAllDesserts();
            foreach ($Pizza as $key => $valeur) {
                $nom = $valeur['nom'];
                $id = $valeur['id'];
                $image = $valeur['image_url'];
                $Ingredient = getPizzaIngredientByID($nom);

                echo '
        <div class="block w-full p-4 overflow-hidden transition duration-200 ease-in-out transform bg-white rounded-lg shadow-md c-card hover:shadow-xl hover:scale-105">
            <div class="relative pb-48 overflow-hidden rounded-lg">
                <img class="absolute inset-0 object-cover w-full h-full" src="' . $image . '" alt="">
            </div>
            <form method="POST" action="/pizzas">
                <div class="p-4">
                    <h2 class="mt-2 mb-2 font-bold uppercase">' . $nom . '</h2>
                    <p class="h-10 text-sm">';
                foreach ($Ingredient as $key => $valeur) {
                    echo $valeur['libelle'] . ', ';
                }
                echo '
                    </p>
                    <div class="relative mt-3">
                        <select name="taille" class="relative w-full py-2 pl-3 pr-10 text-left bg-white border border-gray-300 rounded-md shadow-sm cursor-default focus:outline-none focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                            <option value="petite">Petite</option>
                            <option value="moyenne">Moyenne</option>
                            <option value="mega">Mega</option>
                        </select>
                        <input value="1" id="quantite" name="quantite" type="number" class="relative w-full py-2 pl-3 mt-2 text-left bg-white border border-gray-300 rounded-md shadow-sm cursor-default focus:outline-none focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm" placeholder="Quantité">
                    </div>
                </div>
                <input type="hidden" name="id" value="' . $id . '">
                <div class="p-4 text-xs text-gray-700 border-t">
                    <button type="submit" class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-200 ease-in-out transform bg-yellow-500 border border-transparent rounded-md group hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-400">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="text-2xl text-yellow-400 far fa-cart-plus"></i>
                        </span>
                        Ajouter
                    </button>
                </div>
            </form>
        </div>';
            }
            ?>
        </div>
    </div>
    <!-- BAS DE PAGE -->
    <?php include dirname(__FILE__) . '/components/footer.php';

    ?>

</body>

</html>