<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php
 $type = isset($_POST["type"])?$_POST["type"] : "";
 $identifiant = isset($_POST["identifiant"])?$_POST["identifiant"] : "";
 $password = isset($_POST["password"])?$_POST["password"] : "";
 $database = "piscine3";
 $erreur="";



 

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);


 //si le BDD existe, faire le traitement
if ($db_found) {

 $sql = "SELECT * FROM administrateur";
if ($identifiant != "") {
//on cherche le livre avec les paramètres titre et auteur
$sql .= " WHERE identifiant='$identifiant'";
if ($password != "") {
$sql .= " AND password='$password'";
}
}
$result = mysqli_query($db_handle, $sql);
if (mysqli_num_rows($result) == 0 OR  $identifiant=="" OR $password=="") {
//le livre recherché n'existe pas
echo "Erreur de connexion";
}
 else {
 	echo "connexion réussie";
 	?>
 	<a href="administrateur.php"> <input type="button" name="button" value="Acceder a ma page"></a> 
 	<?php  
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
</body>
</html>




