<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<h1> Page d'accueil avec le design</h1>
<form method="post" action="DeleteAdministrateur.php">
	<table>
		<tr>
			<td>
				<h2>
		Supprimer un article
				</h2>
			</td>
			
		</tr>

		<tr>
			<td>
				<select name="categorie">
				<option> </option>
				<option value="livre">Livre</option>
				<option value="musique">Musique</option>
				<option value="vetement">Vetement</option>
				<option value="sport">Sport et Loisir</option>
				</select>
				</td>
		</tr>


		<tr>
			<td>
				ID: <br>
				<input type="number" name="id">
			</td>
		</tr>

		
	<tr>
		<td>
			<input type="submit" name="supprimer" value="Valider">
		</td>
	
	</tr>
	

	


	</table>
</form>


	<table>
		<tr>
			<td>
				<h2>
		Ajouter un article
				</h2>
			</td>
			
		</tr>

			<tr>
				<td>
					<select  name="categorie2" onChange="location.href=''+this.options[this.selectedIndex].value+'.html';">
				<option> </option>
				<option value="livre">Livre</option>
				<option value="musique">Musique</option>
				<option value="vetement">Vetement</option>
				<option value="sport">Sport et Loisir</option>
				</select>
				</td>
				
					
					
				
			</tr>
		</table>
		<br>
		<br>

			<tr>
					<form action="gererVendeur.php" method="post">
						<table>
							<tr>
								<td>
									Gerer les vendeurs:	
								</td>
							</tr>
							<tr>
								<td>
									
								
								<select  name="type" onChange="location.href=''+this.options[this.selectedIndex].value+'.html';">
								<option> </option>
								<option value="ajouterVendeur"> Ajouter </option>
								<option value="supprimerVendeur">Supprimer </option>
								</select>
								</td>
							</tr>
						
						
						</table>
						
					</form>
				</td>
			</tr>




	

</table>



</body>
</html>



