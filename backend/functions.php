<?php
session_start();
function connectDB(){
	$link = new PDO('mysql:host=localhost;dbname=pizza', 'jules', 'Jules900');
	if(!$link){
		
		return  null;
	}
	else{
		
		return $link;
	}
}
function disconnectDB($link){
	$link=null;
}

function getAllPizza(){
	$link= connectDB();
	if(!$link)
	{
		echo 'a problem was occured !! try again later';
		
	}
	else{
		
		$req= "select * from produit_pizza where taille='mega' ";
		$sth = $link->prepare($req);
		$sth->execute();
		if(!$sth){
			echo $link->errorInfo();
			return null;
		}
		else{
			$nblignes =$sth->rowCount();
		
			if($nblignes>0){
				$tab=$sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($link);
				return $tab;
				
			}
			else{
				return null;
			}
			
		}
	}
	
	
}

function getPizza($nom){
	$link= connectDB();
	if(!$link)
	{
		echo 'a problem was occured !! try again later';
		
	}
	else{
		
		$req= "select * from produit_pizza where libelle=?";
		$sth = $link->prepare($req);
		$sth->execute([$nom]);
		if(!$sth){
			echo $link->errorInfo();
			return null;
		}
		else{
			$nblignes =$sth->rowCount();
		
			if($nblignes>0){
				$tab=$sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($link);
				return $tab;
				
			}
			else{
				return null;
			}
			
		}
	}
	
	
}

function getAllIngredient($id){
	$link= connectDB();
	if(!$link)
	{
		echo 'a problem was occured !! try again later';
		
	}
	else{
		
		$req= "select * from ingredient_pizza";
		$sth = $link->prepare($req);
		$sth->execute([$id]);
		if(!$sth){
			echo $link->errorInfo();
			return null;
		}
		else{
			$nblignes =$sth->rowCount();
		
			if($nblignes>0){
				$tab=$sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($link);
				return $tab;
				
			}
			else{
				return null;
			}
			
		}
	}
	
	
}

function getIngredientById($id){
	$link= connectDB();
	if(!$link)
	{
		echo 'a problem was occured !! try again later';
		
	}
	else{
		
		$req= "select * from ingredient_pizza where id =?";
		$sth = $link->prepare($req);
		$sth->execute([$id]);
		if(!$sth){
			echo $link->errorInfo();
			return null;
		}
		else{
			$nblignes =$sth->rowCount();
		
			if($nblignes>0){
				$tab=$sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($link);
				return $tab;
				
			}
			else{
				return null;
			}
			
		}
	}
	
	
}

function getPizzaIngredientByID($idpizza){
	$link= connectDB();
	if(!$link)
	{
		echo 'a problem was occured !! try again later';
		
	}
	else{
		
		$req= "select id_ingredient from produit_ingredient where  id_produit=?";
		$sth = $link->prepare($req);
		$sth->execute([$idpizza]);
		if(!$sth){
			echo $link->errorInfo();
			return null;
		}
		else{
			$nblignes =$sth->rowCount();
		
			if($nblignes>0){
				$tab=$sth->fetchAll(PDO::FETCH_ASSOC);
				disconnectDB($link);
                foreach ($tab as $key=>$valeur){					
					$ing = getIngredientById($valeur["id_ingredient"]);
					foreach ($ing as $cle=>$valeurs){
						$pizza[] = $valeurs["libelle"];
					}
				}
				return $pizza;
				
			}
			else{
				return null;
			}
			
		}
	}
	
	
}


?>