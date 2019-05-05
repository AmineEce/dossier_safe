<?php

$Email= isset($_POST["email"])?$_POST["email"] : "";
$Identifiant= isset($_POST["identifiant"])?$_POST["identifiant"] : "";
$Nom= isset($_POST["nom"])?$_POST["nom"] : "";

$database = "piscine";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
	
if ($db_found) {

$sql = "SELECT * FROM vendeur";
if ($Email != "") {
$sql .= " Where Email='$Email'";

}
$result = mysqli_query($db_handle, $sql);
if (mysqli_num_rows($result) == 0)

{
if($Identifiant!="" AND $Email!="" AND $Nom!="")
{

$sql = "INSERT INTO Vendeur VALUES(0,'$Identifiant','$Email','$Nom') ";
$result = mysqli_query($db_handle, $sql);
echo "Vendeur ajouté";	
}

}
else
	{	if($Email!="")
		echo "Email déjà utilisé <br>";


	}

if($Identifiant=="" OR $Email=="" OR $Nom=="")
	{	
		echo "Veuillez remplir tous les champs";
	}


	
}
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>


