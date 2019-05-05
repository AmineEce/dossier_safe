
<?php


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
	
if ($db_found) {

$sql = "SELECT * FROM Livre";
if($Auteur!="" And $Titre!="" And $Date!="" And $Genre!="" And $Prix!="" AND $Image !="" AND $Description != "" AND $Quantite!="")) {
//on cherche le livre avec les paramètres titre et auteur
$sql .= " WHERE Titre LIKE '%$titre%'";
if ($auteur != "") {
$sql .= " AND Auteur LIKE '%$auteur%'";
}
}
$result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
if (mysqli_num_rows($result) != 0) {
//le livre est déjà dans la BDD
//incrementer quantitééé
}
else {
$sql = "INSERT INTO Livre VALUES(0,'$Titre','$Auteur',$Date,'$Genre','$Image','$Description','$Prix','$Quantite') ";
	$result = mysqli_query($db_handle, $sql);	
echo "Livre ajouté." . "<br>";

}


if ($Auteur!="" OR $Titre!="" OR $Date!="" OR $Genre!="" OR $Prix!="" OR $Image !="" OR $Description != "" OR $Quantite!="") {
	echo "Veuillez remplir tous les champs";
	
}

}

else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>




