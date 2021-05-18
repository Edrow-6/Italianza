<?php
session_start();
function connectDB()
{
	$link = new PDO('mysql:host=dawbee.fr;dbname=Italianza', 'ppe', 'ppeLycée91@');
	if (!$link) {

		return  null;
	} else {

		return $link;
	}
}
function disconnectDB($link)
{
	$link = null;
}

function getAllPizza()
{
	$link = connectDB();
	if (!$link) {
		echo 'a problem was occured !! try again later';
	} else {

		$req = "select * from produit_pizza where taille='mega' ";
		$sth = $link->prepare($req);
		$sth->execute();
		if (!$sth) {
			echo $link->errorInfo();
			return null;
		} else {
			$nblignes = $sth->rowCount();

			if ($nblignes > 0) {
				$tab = $sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($link);
				return $tab;
			} else {
				return null;
			}
		}
	}
}

function getPizza($nom)
{
	$link = connectDB();
	if (!$link) {
		echo 'a problem was occured !! try again later';
	} else {

		$req = "select * from produit_pizza where libelle=?";
		$sth = $link->prepare($req);
		$sth->execute([$nom]);
		if (!$sth) {
			echo $link->errorInfo();
			return null;
		} else {
			$nblignes = $sth->rowCount();

			if ($nblignes > 0) {
				$tab = $sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($link);
				return $tab;
			} else {
				return null;
			}
		}
	}
}

function getAllIngredient()
{
	$link = connectDB();
	if (!$link) {
		echo 'a problem was occured !! try again later';
	} else {

		$req = "select * from ingredient_pizza";
		$sth = $link->prepare($req);
		$sth->execute([]);
		if (!$sth) {
			echo $link->errorInfo();
			return null;
		} else {
			$nblignes = $sth->rowCount();

			if ($nblignes > 0) {
				$tab = $sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($link);
				return $tab;
			} else {
				return null;
			}
		}
	}
}

function getIngredientById($id)
{
	$link = connectDB();
	if (!$link) {
		echo 'a problem was occured !! try again later';
	} else {

		$req = "select * from ingredient_pizza where id =?";
		$sth = $link->prepare($req);
		$sth->execute([$id]);
		if (!$sth) {
			echo $link->errorInfo();
			return null;
		} else {
			$nblignes = $sth->rowCount();

			if ($nblignes > 0) {
				$tab = $sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($link);
				return $tab;
			} else {
				return null;
			}
		}
	}
}

function getPizzaIngredientByID($nompizza)
{
	$link = connectDB();
	if (!$link) {
		echo 'a problem was occured !! try again later';
	} else {

		$req = "SELECT ingredient_pizza.libelle FROM produit_pizza INNER JOIN produit_ingredient ON produit_pizza.id = produit_ingredient.id_produit INNER JOIN ingredient_pizza ON ingredient_pizza.id = produit_ingredient.id_ingredient WHERE produit_pizza.libelle = ?";
		$sth = $link->prepare($req);
		$sth->execute([$nompizza]);
		if (!$sth) {
			echo $link->errorInfo();
			return null;
		} else {
			$nblignes = $sth->rowCount();

			if ($nblignes > 0) {
				$tab = $sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($link);
				return $tab;
			} else {
				return null;
			}
		}
	}
}
