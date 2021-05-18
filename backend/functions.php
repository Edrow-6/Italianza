<?php
session_start();
function connectDB()
{
	try {
		$conn = new PDO('mysql:host=dawbee.fr;dbname=Italianza', 'ppe', 'ppeLycée91@');
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

		$req = "select * from produit_pizza where taille='mega' ";
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

		$req = "select * from produit_pizza where libelle=?";
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

		$req = "SELECT ingredient_pizza.libelle FROM produit_pizza INNER JOIN produit_ingredient ON produit_pizza.id = produit_ingredient.id_produit INNER JOIN ingredient_pizza ON ingredient_pizza.id = produit_ingredient.id_ingredient WHERE produit_pizza.libelle = ?";
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
