<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>
		
	</title>
</head>
<body>
	<div id="formulaire">
		
	
	<form method="post" action="traitement.php">
		<table>
			<tr>
				<td> </td>

			</tr>
			<tr>
				<select  name="type" onChange="location.href=''+this.options[this.selectedIndex].value+'.html';">
				<option> </option>

				<option value="Administrateur"> Administrateur </option>
				

				<option value="Vendeur">Vendeur</option>
				<option value="Acheteur">Acheteur</option>
				</select>
					
					
				
			</tr>
			

			<tr>
				<tr class="question">
					<td > Pas de compte ?</td>
				</tr> 
				<tr>
					<td> 
						<a href="Connexion2.php">
							<input type="button" name="créer" value="Créer votre compte Amazon">
						</a>
						</td>
				</tr>
				
			</tr>

		</table>
	</form>
	</div>

</body>
</html>