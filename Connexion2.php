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
<td>E-mail:</td>
<td><input type="text" name="mail"/></td>
</tr>
<tr>
				<td> Statut</td>
				<td>
					<select name="type">
				<option> </option>
				<option value="Vendeur">Vendeur</option>
				<option value="Acheteur">Acheteur</option>
				</select>
				</td>
				
					
					
				
			</tr>
<tr>
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
<td> Votre mot de passe doit contenir au moins 8 caractères</td>
</tr>
<tr>
<td>Entrer le mot de passe à nouveau:</td>
<td><input type="password" name="password2"/></td>
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