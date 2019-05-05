<?php

$Categorie= isset($_POST["categorie"])?$_POST["categorie"] : "";
$Nom= isset($_POST["nom"])?$_POST["nom"] : "";
$Prix= isset($_POST["prix"])?$_POST["prix"] : "";
$Image= isset($_POST["src"])?$_POST["src"] : "";
$Description= isset($_POST["description"])?$_POST["description"] : "";
$Quantite = isset($_POST["quantite"])?$_POST["quantite"] : "";


$database = "piscine";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
	
if ($db_found) {

$sql = "SELECT * FROM sport";
if($Nom!="" And $Prix!="" AND $Image !="" AND $Description != "" AND $Quantite!="") {
//on cherche le livre avec les paramètres titre et auteur
$sql .= " WHERE Nom LIKE '%$Nom%'";
$sql .= " AND Prix LIKE '%$Prix%'";


$result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
if (mysqli_num_rows($result) != 0) 
{

$sql ="UPDATE sport Set Quantite=Quantite+$Quantite WHERE Nom='$Nom' AND Prix=$Prix";

$result = mysqli_query($db_handle, $sql);
echo "Article incrementer";
//le livre est déjà dans la BDD
//incrementer quantitééé
}

else {
$sql = "INSERT INTO sport VALUES(0,'$Categorie','$Nom','$Image','$Description','$Prix','$Quantite') ";
	$result = mysqli_query($db_handle, $sql);	
echo "article ajouté." . "<br>";


}
}


if ($Categorie=="" OR $Nom=="" OR $Image =="" OR $Description == "" OR $Quantite=="") {

	echo "Veuillez remplir tous les champs";
	
}

}

else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>







