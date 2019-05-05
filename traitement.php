<?php
 $type = isset($_POST["type"])?$_POST["type"] : "";
 $identifiant = isset($_POST["identifiant"])?$_POST["identifiant"] : "";
 $password = isset($_POST["password"])?$_POST["password"] : "";
 $database = "piscine";
 $erreur="";

if( $type=="")
 {
 	$erreur.="Le champ type est vide. <br>";
 }

 if($identifiant == "") {$erreur .= " Le champ identifiant est vide. <br>";}
 if($password == "") {$erreur .= "Le champ password est vide. <br>";}

 
 
 if ($erreur == "") {
 echo "Formulaire valide";
 }
 else {
 echo "Erreur : $erreur <br>";
 }

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);


 //si le BDD existe, faire le traitement
if ($db_found) {

 $sql = "SELECT * FROM connexion";
if ($identifiant != "") {
//on cherche le livre avec les paramètres titre et auteur
$sql .= " WHERE identifiant LIKE '%$identifiant%'";
if ($password != "") {
$sql .= " AND password LIKE '%$password%'";
}
}
$result = mysqli_query($db_handle, $sql);
if (mysqli_num_rows($result) == 0) {
//le livre recherché n'existe pas
echo "Erreur de connexion";
}
 else {
 	echo "C'est good";
 	}
 }




 
//end if
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>
