<?php

$database = "piscine2";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

 //si le BDD existe, faire le traitement
if ($db_found) {
 $sql = "SELECT Titre,Auteur,Image FROM Livre";
 $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result)) {
 echo "Titre: " . $data['Titre'] . '<br>';
 echo "Auteur:" . $data['Auteur'] . '<br>';
 echo('<img  src="' . $data['Image'] .'" / > <br/>');
 
 }//end while

}//end if
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>