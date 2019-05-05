<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="traitement2.php" method="post">
		<table>
<tr>
<td>
	Votre nom</td>
<td><input type="text" name="name"/></td>
 </tr>
<tr>
	<tr>
<td>
	Votre Prenom</td>
<td><input type="text" name="prenom"/></td>
 </tr>
<td>E-mail:</td>
<td><input type="text" name="mail"/></td>
</tr>

	<td>
		Identifiant:
	</td>
	<td>
		<input type="text" name="id">
	</td>
</tr>


 <tr>
<td>Mot de passe:</td>
<td><input type="password" name="password1"/></td>
<td> Votre mot de passe doit contenir au moins 6 caractères</td>
</tr>
<tr>
<td>Entrer le mot de passe à nouveau:</td>
<td><input type="password" name="password2"/></td>
</tr>
<tr>
<td>
	Votre Adresse</td>
<td><input type="text" name="adresse"/></td>
 </tr>
 
 <tr>
<td>
	Adresse Ligne 1</td>
<td><input type="text" name="adresse1"/></td>
 </tr><tr>
<td>
	Adresse Ligne 2</td>
<td><input type="text" name="adresse2"/></td>
 </tr><tr>
<td>
	Votre Ville</td>
<td><input type="text" name="ville"/></td>
 </tr><tr>
<td>
	Votre Code Postal</td>
<td><input type="number" name="postal" minlength="5" maxlength="5" ></td>
 </tr>
<tr>
<td>
	Votre Pays</td>
<td><input type="text" name="pays"/></td>
 </tr>
 <tr>
<td>
	Votre Numero</td>
<td><input type="number" name="numero"/></td>
 </tr>
 <tr>
<td>
	Type de paiement</td>
<td><input type="text" name="typePaiement"/></td>
 </tr>
 <tr>
<td>
	Numéro de carte</td>
<td><input type="password" name="numeroCarte"/></td>
 </tr>
 <tr>
<td>
	Nom de Carte</td>
<td><input type="text" name="nomCarte"/></td>
 </tr>
 <tr>
<td>
	Date d'expiration</td>
<td><input type="number" name="dateExpiration"/></td>
 </tr>
 <tr>
<td>
	Code de Securité</td>
<td><input type="password" name="codeSecurite"/></td>
 </tr>


<tr>
<td colspan="2" align="center">
<input type="submit" value="Valider" />
</td>
</tr>
</table>
</form>

</body>
</html>