<?php

$Auteur= isset($_POST["auteur"])?$_POST["auteur"] : "";
$Titre= isset($_POST["titre"])?$_POST["titre"] : "";
$Date= isset($_POST["date"])?$_POST["date"] : "";
$Genre= isset($_POST["genre"])?$_POST["genre"] : "";
$Prix= isset($_POST["prix"])?$_POST["prix"] : "";
$Image= isset($_POST["src"])?$_POST["src"] : "";
$Description= isset($_POST["description"])?$_POST["description"] : "";
$Quantite = isset($_POST["quantite"])?$_POST["quantite"] : "";

$database = "piscine";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
	
if ($db_found) {

$sql = "SELECT * FROM Musique";
if($Auteur!="" And $Titre!="" And $Date!="" And $Genre!="" And $Prix!="" AND $Image !="" AND $Description != "" AND $Quantite!="") {
//on cherche le livre avec les paramètres titre et auteur
$sql .= " WHERE Titre LIKE '%$Titre%'";
$sql .= " AND Auteur LIKE '%$Auteur%'";


$result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
if (mysqli_num_rows($result) != 0) 
{

$sql ="UPDATE Musique Set Quantite=Quantite+$Quantite WHERE Titre='$Titre' AND Auteur='$Auteur'";

$result = mysqli_query($db_handle, $sql);
echo "Musique ajoutée";
//le livre est déjà dans la BDD
//incrementer quantitééé
}

else {
$sql = "INSERT INTO Musique VALUES(0,'$Titre','$Auteur',$Date,'$Genre','$Image','$Description','$Prix','$Quantite') ";
	$result = mysqli_query($db_handle, $sql);	
echo "Musique ajouté." . "<br>";


}
}


if ($Auteur=="" OR $Titre=="" OR $Date=="" OR $Genre=="" OR $Prix=="" OR $Image =="" OR $Description == "" OR $Quantite=="") {

	echo "Veuillez remplir tous les champs";
	
}

}

else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>



