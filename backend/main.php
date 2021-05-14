<!DOCTYPE html>
<html lang="en">
<?php
require_once('functions.php');
?>
<head>
  <title>RH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container bg-success">
  <h2>TEST </h2>
</div>
<div class='container'>


<?php 
$Pizza = getAllPizza();
?>
<form action="" method="POST">
<?php
if(isset($_POST['pizza']))
{
  $id = $_POST['pizza'];
  $Ingredient = getPizzaIngredientByID($id);
  foreach ($Ingredient as $key=>$valeur){				
    echo $valeur."</BR>";
   }
}
foreach ($Pizza as $key=>$valeur){				
 echo "<button type=submit name=pizza value='$valeur[id]'>$valeur[libelle]</button></BR>";
}




?>
</form>

</body>

</html>