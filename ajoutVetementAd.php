<?php

$Genre= isset($_POST["genre"])?$_POST["genre"] : "";
$Categorie= isset($_POST["categorie"])?$_POST["categorie"] : "";
$Taille= isset($_POST["taille"])?$_POST["taille"] : "";
$Prix= isset($_POST["prix"])?$_POST["prix"] : "";
$Marque= isset($_POST["marque"])?$_POST["marque"] : "";
$Couleur= isset($_POST["couleur"])?$_POST["couleur"] : "";
$Image= isset($_POST["src"])?$_POST["src"] : "";
$Description= isset($_POST["description"])?$_POST["description"] : "";
$Quantite = isset($_POST["quantite"])?$_POST["quantite"] : "";

$database = "piscine";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);







	
if ($db_found) {

$sql = "SELECT * FROM vetement";
if($Genre!="" And $Categorie!="" AND $Prix!="" And $Taille!="" And $Marque!="" And $Couleur!="" AND $Image !="" AND $Description != "" AND $Quantite!="") {
//on cherche le livre avec les paramètres titre et auteur
$sql .= " WHERE Categorie LIKE '%$Categorie%'";
$sql .= " AND Marque LIKE '%$Marque%'";
$sql .= " AND Prix LIKE '%$Prix%'";




$result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
if (mysqli_num_rows($result) != 0) 
{

$sql ="UPDATE vetement Set Quantite=Quantite+$Quantite WHERE Categorie='$Categorie' AND Marque='$Marque' AND Prix='$Prix' ";

$result = mysqli_query($db_handle, $sql);
echo "vetement incrementer";
//le livre est déjà dans la BDD
//incrementer quantitééé
}

else {
$sql = "INSERT INTO Vetement VALUES(0,'$Genre','$Categorie','$Taille','$Prix','$Marque','$Couleur','$Image','$Description','$Quantite') ";
	$result = mysqli_query($db_handle, $sql);	
echo "vetement ajouté." . "<br>";

}
}


if ($Genre=="" OR $Categorie=="" OR $Prix=="" OR $Taille=="" OR $Marque=="" OR $Couleur=="" OR $Image =="" OR $Description == "" OR $Quantite=="") {

	echo "Veuillez remplir tous les champs";
	
}

}

else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>









