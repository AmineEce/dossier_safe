<!DOCTYPE html>
<html>
<head>
  <title>
    
  </title>
</head>
<body>
<?php

$database = "piscine";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

 //si le BDD existe, faire le traitement
if ($db_found) {
 $sql = "SELECT Titre,Auteur,Image,Description,Prix,Quantite FROM Livre WHERE Date=2012 OR Date=2007 ";
 $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result)) {
echo "Titre: " . $data['Titre'] . '<br>';
echo "Auteur:" . $data['Auteur'] . '<br>';
echo('<img class="image" src="' . $data['Image'] .'" / > <br/>');
  //Modification !!!!!!!!
?>

<form method="post" action="ajoutPanier.php">

<td><input type="hidden" name="description" value="<?php echo $data['Description'] ?>">
</td>
<td><input type="hidden" name="prix" value="<?php echo $data['Prix'] ?>" > </td>
<td><input type="hidden" name="quantite" value= "<?php echo $data['Quantite'] ?>"> </td>
<td>
  <input type="submit" value="Ajouter au panier">
</td>

  
</form>



<?php

}
}
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>
      
    

</body>
</html>
