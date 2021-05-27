<?php
session_start();
function connectDB()
{
	try {
<<<<<<< HEAD:backend/functions.php
		$conn = new PDO('mysql:host=hostname;dbname=databasename', 'username', 'password');
=======
		$conn = new PDO('mysql:host=localhost;dbname=Italianza', 'ppe', 'ppeLycée91@');
>>>>>>> 84b4a797aeb06158b97a23dca37e4a6a98e65660:Backend/functions.php
	} catch (PDOException $e) {
		echo "Erreur : " . $e->getMessage() . "<br/>";
		die();
	}
	return $conn;
}
function disconnectDB($link)
{
	$link = null;
}

function getAllPizza()
{
	$conn = connectDB();
	if (!$conn) {
		echo 'a problem was occured !! try again later';
	} else {

		$req = "select * from pizzas";
		$sth = $conn->prepare($req);
		$sth->execute();
		if (!$sth) {
			echo $conn->errorInfo();
			return null;
		} else {
			$nblignes = $sth->rowCount();

			if ($nblignes > 0) {
				$tab = $sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($conn);
				return $tab;
			} else {
				return null;
			}
		}
	}
}

function getAllDesserts()
{
	$conn = connectDB();
	if (!$conn) {
		echo 'a problem was occured !! try again later';
	} else {

		$req = "select * from desserts";
		$sth = $conn->prepare($req);
		$sth->execute();
		if (!$sth) {
			echo $conn->errorInfo();
			return null;
		} else {
			$nblignes = $sth->rowCount();

			if ($nblignes > 0) {
				$tab = $sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($conn);
				return $tab;
			} else {
				return null;
			}
		}
	}
}

function getAllBoissons()
{
	$conn = connectDB();
	if (!$conn) {
		echo 'a problem was occured !! try again later';
	} else {

		$req = "select * from boissons";
		$sth = $conn->prepare($req);
		$sth->execute();
		if (!$sth) {
			echo $conn->errorInfo();
			return null;
		} else {
			$nblignes = $sth->rowCount();

			if ($nblignes > 0) {
				$tab = $sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($conn);
				return $tab;
			} else {
				return null;
			}
		}
	}
}

function getPizza($nom)
{
	$conn = connectDB();
	if (!$conn) {
		echo 'a problem was occured !! try again later';
	} else {

		$req = "select * from pizzas where nom=?";
		$sth = $conn->prepare($req);
		$sth->execute([$nom]);
		if (!$sth) {
			echo $conn->errorInfo();
			return null;
		} else {
			$nblignes = $sth->rowCount();

			if ($nblignes > 0) {
				$tab = $sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($conn);
				return $tab;
			} else {
				return null;
			}
		}
	}
}

function getAllIngredient()
{
	$conn = connectDB();
	if (!$conn) {
		echo 'a problem was occured !! try again later';
	} else {

		$req = "select * from ingredient_pizza";
		$sth = $conn->prepare($req);
		$sth->execute([]);
		if (!$sth) {
			echo $conn->errorInfo();
			return null;
		} else {
			$nblignes = $sth->rowCount();

			if ($nblignes > 0) {
				$tab = $sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($conn);
				return $tab;
			} else {
				return null;
			}
		}
	}
}

function getIngredientById($id)
{
	$conn = connectDB();
	if (!$conn) {
		echo 'a problem was occured !! try again later';
	} else {

		$req = "select * from ingredient_pizza where id =?";
		$sth = $conn->prepare($req);
		$sth->execute([$id]);
		if (!$sth) {
			echo $conn->errorInfo();
			return null;
		} else {
			$nblignes = $sth->rowCount();

			if ($nblignes > 0) {
				$tab = $sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($conn);
				return $tab;
			} else {
				return null;
			}
		}
	}
}

function getPizzaIngredientByID($nompizza)
{
	$conn = connectDB();
	if (!$conn) {
		echo 'a problem was occured !! try again later';
	} else {

		$req = "SELECT ingredient_pizza.libelle FROM pizzas INNER JOIN produit_ingredient ON pizzas.id = produit_ingredient.id_produit INNER JOIN ingredient_pizza ON ingredient_pizza.id = produit_ingredient.id_ingredient WHERE pizzas.nom = ?";
		$sth = $conn->prepare($req);
		$sth->execute([$nompizza]);
		if (!$sth) {
			echo $conn->errorInfo();
			return null;
		} else {
			$nblignes = $sth->rowCount();

			if ($nblignes > 0) {
				$tab = $sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($conn);
				return $tab;
			} else {
				return null;
			}
		}
	}
}
