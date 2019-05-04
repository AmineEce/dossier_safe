<?php


 $nom = isset($_POST["name"])?$_POST["name"] : ""; 
 $mail = isset($_POST["mail"])?$_POST["mail"] : "";
$identifiant = isset($_POST["id"])?$_POST["id"] : "";
 $password1 = isset($_POST["password1"])?$_POST["password1"] : "";
 $password2 = isset($_POST["password2"])?$_POST["password2"] : "";
 $Prenom = isset($_POST["prenom"])?$_POST["prenom"] : "";
 $Adresse = isset($_POST["adresse"])?$_POST["adresse"] : "";
 $Adresse1 = isset($_POST["adresse1"])?$_POST["adresse1"] : "";
 $Adresse2 = isset($_POST["adresse2"])?$_POST["adresse2"] : "";
 $Ville = isset($_POST["ville"])?$_POST["ville"] : "";
 $Postal = isset($_POST["postal"])?$_POST["postal"] : "";
 $Pays = isset($_POST["pays"])?$_POST["pays"] : "";
 $Numero = isset($_POST["numero"])?$_POST["numero"] : "";
 $TypePaiement = isset($_POST["typePaiement"])?$_POST["typePaiement"] : "";
 $NumeroCarte = isset($_POST["numeroCarte"])?$_POST["numeroCarte"] : "";
 $NomCarte = isset($_POST["nomCarte"])?$_POST["nomCarte"] : "";
 $DateExpiration = isset($_POST["dateExpiration"])?$_POST["dateExpiration"] : "";
 $CodeSecurite= isset($_POST["codeSecurite"])?$_POST["codeSecurite"] : "";



 $erreur = "";

if($nom == "") {$erreur .= " Le champ nom est vide. <br>";}
if($mail == "") {
 	$erreur .= "Le champ E-mail est vide. <br>";}


if($identifiant == "") {$erreur .= " Le champ Identifiant est vide. <br>";}
if($password1 == "") {
 	$erreur .= "Le champ password est vide. <br>";}
 	if($password1 !=="")
 	{
 		if($password2 !=$password1) {
 		$erreur .= " Les mots de passe ne correspondent pas <br>";}
 		if(strlen($password1)<6)
{
		$erreur .= " Le mot de passe doit contenir au moins 6 caractère <br>";
}
 	}
if($Prenom == "") {$erreur .= " Le champ Prenom est vide. <br>";}
if($Adresse == "") {$erreur .= " Le champ Adresse est vide. <br>";}
if($Adresse1 == "") {$erreur .= " Le champ Adresse1 est vide. <br>";}
if($Adresse2 == "") {$erreur .= " Le champ Adresse2 est vide. <br>";}
if($Ville == "") {$erreur .= " Le champ Ville est vide. <br>";}
if($Postal == "") {$erreur .= " Le champ Code Postal est vide. <br>";}
if($Pays == "") {$erreur .= " Le champ Pays est vide. <br>";}
if($Numero == "") {$erreur .= " Le champ Numero est vide. <br>";}
if($TypePaiement == "") {$erreur .= " Le champ Type de Paiement est vide. <br>";}
if($NumeroCarte == "") {$erreur .= " Le champ Numero de Carte est vide. <br>";}
if($NomCarte == "") {$erreur .= " Le champ Nom de Carte est vide. <br>";}
if($DateExpiration == "") {$erreur .= " Le champ date Expiration est vide. <br>";}
if($CodeSecurite== "") {$erreur .= " Le champ Code de Securite est vide. <br>";}
		

 if ($erreur != "") {
 echo "Erreur : $erreur";
 }


$database = "piscine";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);


 //si le BDD existe, faire le traitement
if ($db_found) {


if($erreur=="")
{
	$sql = "INSERT INTO acheteur VALUES (0,'$identifiant','$password1','$nom','$Prenom','$Adresse','$mail','$Adresse1','$Adresse2','$Ville','$Postal','$Pays','$Numero','$TypePaiement','$NumeroCarte','$NomCarte','$DateExpiration','$CodeSecurite')";

 $result = mysqli_query($db_handle, $sql);
 echo "Compte acheteur Créer";
}



}


else {
 echo "Database not found";
}

mysqli_close($db_handle);
?>