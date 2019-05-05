<?php

$Email= isset($_POST["email"])?$_POST["email"] : "";
$Identifiant= isset($_POST["identifiant"])?$_POST["identifiant"] : "";
$Nom= isset($_POST["nom"])?$_POST["nom"] : "";

$database = "piscine";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
	

if ($db_found) {
if($Email!="" And $Identifiant!="" And $Nom!="")
{

$sql = "SELECT * FROM Vendeur";

//on cherche le livre avec les paramètres titre et auteur
$sql .= " where Nom like '%$Nom%' AND Email like '%$Email%' AND identifiant like '%$Identifiant%'";
$result = mysqli_query($db_handle, $sql);

}
else{
	$result="";
	echo "Remplir tous les champs";
}

if ($Email!="" And $Identifiant!="" And $Nom!="" AND mysqli_num_rows($result) == 0)
{
	echo "Vendeur inexistant";
}
if($Email!="" And $Identifiant!="" And $Nom!="" AND mysqli_num_rows($result) == 1)
{
	$sql = "DELETE FROM Vendeur where Nom like '%$Nom%' AND Email like '%$Email%' AND identifiant like '%$Identifiant%'";
	$result = mysqli_query($db_handle, $sql);
	echo "Vendeur supprimée";

}

}



else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>





