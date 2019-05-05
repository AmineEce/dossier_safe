<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link href="bootstrap.min.css" rel=stylesheet>
	<link rel="stylesheet" href="Administrateur.css">
	<title>
		Formulaire admin
	</title>
	
</head>
<body>
	<div id="entete"> <img src="logoamazon3.png" alt="logo"></div><div id="formulaire">
<form method="post" action="DeleteAdministrateur.php">
	<table>
		<tr>
			<td>
				<h2>
		<p style="color:#F79B34";> <B>Supprimer un article</B> </p>
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

<div id="formulaire1">
	<table>
		<tr>
			<td>
				<h2>
		<p style="color:#F79B34";> <B>Ajouter un article</B> </p>
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
		</div>

			<tr><div id="formulaire1">
					<form action="gererVendeur.php" method="post">
						<table>
							<tr>
								<td>
									<h2>
									<p style="color:#F79B34";> <B>Gerer les vendeurs</B> </p></h2>
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
						
					</form></div>
				</td>
			</tr>




	

</table>


<footer class="footer">

			<!-- container -->
			<div class="container-fluid">

                <div class="row">
                <div class="col-sm-12 colorf col-padding">
				    <button class="btn  btn-black btn-lg"><i class="fa fa-facebook"></i></button>
                    <button class="btn btn-black btn-lg"><i class="fa fa-twitter"></i></button>
                    <button class="btn btn-black btn-lg"><span class="fa fa-youtube"></span></button>
                    

					</div>
                </div>
				<!-- row -->
				<div class="row ">

					<!-- copyright -->
					<div class="col-sm-12 colorf">
						<span class="copyright">Droit d'auteur @2019 <a href="#accueil">ECEamazon</a>, 75015 Paris | Conditions générales de ventes </span>
					</div>
					<!-- /copyright -->


				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</footer>
</body>
</html>



