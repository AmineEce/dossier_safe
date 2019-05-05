
<?php
 $type = isset($_POST["type"])?$_POST["type"] : "";
 $identifiant = isset($_POST["identifiant"])?$_POST["identifiant"] : "";
 $Email = isset($_POST["Email"])?$_POST["Email"] : "";
 $database = "piscine3";
 $erreur="";




$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);


 //si le BDD existe, faire le traitement
if ($db_found) {

 $sql = "SELECT * FROM vendeur";
if ($identifiant != "") {

$sql .= " WHERE identifiant='$identifiant'";
if ($Email != "") {
$sql .= " AND Email='$Email'";
}
}
$result = mysqli_query($db_handle, $sql);
if (mysqli_num_rows($result) == 0 OR  $identifiant=="" OR $Email=="") {

echo "Erreur de connexion";

}
 else {
 	echo "connexion réussie";
 		?>
 	<a href="Vendeur.php"> <input type="button" name="button" value="Acceder a ma page"></a> 
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






