<?php

$Description = $_POST["description"];
$Prix = $_POST["prix"];
$Quantite = $_POST["quantite"];


echo $Prix; 
echo $Description;
echo $Quantite;



$database = "piscine";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);


if ($db_found) {

$sql = "INSERT INTO ajout VALUES(0,'$Description','$Prix','$Quantite') ";
$result = mysqli_query($db_handle, $sql);	
echo "article ajouté au panier." . "<br>";


}
 else {
echo "Database not found";
}

//fermer la connexion
mysqli_close($db_handle);
?>




