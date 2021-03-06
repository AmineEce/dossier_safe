<?php
session_start();
if (!isset($_SESSION['identifiant'])) {
  header ('Location: acheteur.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ECE Amazone</title>
    <meta charset="utf-8">
    
    <!-- Déclaration Internet Explorer (utilisation du dernier moteur de rendu) -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Pour mobile : affichage occupe tout l'espace dispo avec taille 1-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Déclaration du ficher CSS Bootsrap-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!--Déclaration ficher CSS -->
    <link href="style.css" rel=stylesheet>
 
    <!--Ouverture fenêtre à la largeur de l'écran -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    
    <style type="text/css">
     
       <style type="text/css">
    body { background-color: white; }
     
[class*="col"] {
background-color: white;
border-color: white;}
img { width: 100%; }
        
.btn-lg {
  border-color:transparent;
 font-family: sans-serif;
    letter-spacing: 0em;

}
        
.navbar{ 
background-color: white;
padding-top: 20px;
border-color: ghostwhite;
box-shadow: 1px 1px 12px silver;
font-weight: bold;
font-variant : small-caps;
letter-spacing : 0.2em;
font-size : 100%   
        }
        
       
        
        
        

.vc{
    color:darkorange;
    font-family: inherit;
    font-size: 90%;
    }
        


     
        
.dropdown-submenu{position:relative;}
.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;
-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
.dropdown-submenu:hover>.dropdown-menu{display:block;}
.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;
border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#ffffff;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;
-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
   
.bg-img {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
}

        
.header { 
    text-align: center;
    margin-top: 300px; 
   font-weight: bold;
    font-variant : small-caps;
    letter-spacing : 0.2em;
    font-size : 300%;
    margin-left: 200px; 
    margin-right: 200px;
    margin-bottom: 250px;
       
}
   
        
 
h2, h3, h4, h5, h6 {
    font-family: 'Ruda', sans-serif;
    font-weight: 900;
    color: #333;
}

h1{ 
font-family: 'Ruda', sans-serif;
    font-weight: 900;
    color: #333;
    font-size: 500%;
    font-variant : small-caps;
letter-spacing : 0.2em;
   
   
    }
        
        
.navbar-default {
  background-color: #ffffff;
  border-color: #ffffff;
}
.navbar-default .navbar-brand {
  color: #000000;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #ff8c00;
}
.navbar-default .navbar-text {
  color: #000000;
}
.navbar-default .navbar-nav > li > a {
  color: #000000;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #ff8c00;
}
.navbar-default .navbar-nav > li > .dropdown-menu {
  background-color: #ffffff;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a {
  color: #000000;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #ff8c00;
  background-color: #ffffff;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li.divider {
  background-color: #ffffff;
}
.navbar-default .navbar-nav .open .dropdown-menu > .active > a,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
  color: #ff8c00;
  background-color: #ffffff;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #ff8c00;
  background-color: #ffffff;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #ff8c00;
  background-color: #ffffff;
}
.navbar-default .navbar-toggle {
  border-color: #ffffff;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ffffff;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #000000;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #000000;
}
.navbar-default .navbar-link {
  color: #000000;
}
.navbar-default .navbar-link:hover {
  color: #ff8c00;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #000000;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ff8c00;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ff8c00;
    background-color: #ffffff;
  }
    
    
}

 .border{
     box-shadow: 1px 1px 12px silver;
        }

.col-padding{
    margin-bottom: 20px;
    margin-top: 20px;
        }
    
/* Conteneur principal */
.overlay-image {
 position: relative;
 width: 100%;
}

/* Image originale */
.overlay-image .image {
 display: block;
 
}

/* Texte original */
.overlay-image .text {
 color: white;
 line-height: 1.5em;
 font-weight: bold;
    
    letter-spacing : 0.2em;
 text-shadow: 2px 2px 2px #000;
 text-align: center;
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%, -50%);
 width: 100%;

}


/* Overlay */
.overlay-image .hover {
 position: absolute;
 top: 0;
 height: 100%;
 width: 100%;
 opacity: 0;
 transition: .5s ease;
}

/* Apparition overlay sur passage souris */
.overlay-image:hover .hover {
 opacity: 1;
}

/********* Hover background et texte uniquement *******/

.overlay-image .hover {
 background-color: rgba(0,0,0,0.5);
}
        
.footer {
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
   
}

.colorf { background-color: black;
                  border-color: black;
         }


.colorc{
    color: darkorange;
        }

.btn-black{background-color: black;}
    </style>
    
     
    
</head>
<body>
<a name = "Accueil"> </a>
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
      <head class="row">
      <div class="col-sm-2 col-sm-offset-5"><a href="index.html"><img src="img/logoamazon3.png" alt="logo"></a></div>
        </head>
      <div class="pull-right">
         Bienvenue <?php echo htmlentities(trim($_SESSION['identifiant'])); ?>
      </div>
    </div>
     
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html"><div >ACCUEIL</div></a></li>
      <li class="dropdown"> 
            <a data-toggle="dropdown">E-BOUTIQUE<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                <li><a href="#BestSellers">Best Sellers</a></li>
                
<li class="dropdown-submenu">
      <a tabindex="-1" href="#categories"> Catégories</a>
      <ul class="dropdown-menu">
        <li><a tabindex="-1" href="#livres.php">Livres</a></li>
          <li><a tabindex="-1" href="musique.php">Musique</a></li>
          <li><a tabindex="-1" href="vetement.php">Vêtements</a></li>
          <li><a tabindex="-1" href="sport.php">Sports et Loisir</a></li>
     
      
      </ul>
    </li>
          </ul>
        <li><a href="#vendre">VENDRE</a></li>
        <li><a href="#contact">CONTACTEZ-NOUS</a></li>
        
    </ul>
  <form class="navbar-form navbar-right inline-form">
      <div class="form-group">
        <input type="search" class="input-sm form-control" placeholder="T-shirt...">
        <button type="submit" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-search"></span> Rechercher</button>
      </div>
    </form>
    
    </div>
    
    
    
    <div class="bg-img" style="background-image: url(img/image.jpg);">
		</div>
   
			<div class="header">
              ACHETER ET VENDRE N'A JAMAIS ETE AUSSI SIMPLE.
                <br> <br> <br> 
                <p class="mt"><a class="btn btn-warning btn-lg" href="#categories">  en savoir plus <span class="glyphicon glyphicon-chevron-right"></span></a></p>
            
        </div>
   
    
    
   
 <a name = "BestSellers"></a>
<div class="container-fluid">
    <div class="row mt centered ">
      <div class="col-sm-2 col-sm-offset-5">
        <img src="img/bestselle2.png"l>
        </div>
    </div> 
</div>
       
<br> <br><br><br>
    
    <div class="container-fluid">
       <div class=row>
           <div class="col-sm-10 col-sm-offset-1">
               <div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      
      <div class="item active"> 
          <div class=row>
              <div class="col-sm-3 col-sm-offset-2"> <img alt="" src="img/image3.jpg"> 
          <div class="row">
              <div class="col-sm-12"> <strong>ARTICLE 1</strong>- prix </div> 
           </div>
              </div> 
          <div class="col-sm-3 "> <img alt="" src="img/image4.jpg">
              <div class="row">
                  <div class="col-sm-12"> <strong>ARTICLE 1</strong>- prix </div> 
              </div>
          </div>
          <div class="col-sm-3 "> <img alt="" src="img/image1.jpg">
              <div class="row">
                  <div class="col-sm-12"> <strong>ARTICLE 1</strong>- prix </div>
              </div>
          </div>
          </div> 
      </div>
      
    <div class="item "> 
        <div class=row>
            <div class="col-sm-3 col-sm-offset-2"> <img alt="" src="img/image3.jpg">
                <div class="row">
                    <div class="col-sm-12"> <strong>ARTICLE 1</strong>- prix </div> 
                </div>
            </div> 
          <div class="col-sm-3 "><img alt="" src="img/image4.jpg">
              <div class="row">
                  <div class="col-sm-12"> <strong>ARTICLE 1</strong>- prix </div> 
              </div>
            </div>
          <div class="col-sm-3 "> <img alt="" src="img/image1.jpg">
              <div class="row">
                  <div class="col-sm-12"> <strong>ARTICLE 1</strong>- prix </div> 
              </div>
          </div>
        </div>
      </div>
      
</div>
  <a class="left carousel-control" href="#carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
               </div>
           </div> 
        </div>
    </div>
 
        


    <a name = "categories"> </a> 
    
    <div class=container>
        <br><br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-sm-12">
        <div class=row>
           <div class="col-sm-2 col-sm-offset-1"><img src="img/categoriees.jpg" style="box-shadow: 1px 1px 12px silver;"></div>
            <div class="col-sm-6 " style="box-shadow: 1px 1px 12px silver;"><h1>Catégories</h1></div>
            <div class="col-sm-2"><img src="img/categoriess.png" style="box-shadow: 1px 1px 12px silver;"></div>
            </div>
        </div>
    </div>
    </div>
   
    <br><br><br><br><br>
    
   
    <div class="container">
      <div class="row">
        <section class="col-sm-12">
          <div class="row">
            <article class="col-sm-4 pull-right  col-padding">
                <div class="overlay-image">
                    <a href="#BestSellers">
                        <img class="image" src="img/fond.png" alt="Alt text"  />          
                            <div class="hover">
                                <div class="text">EN SAVOIR PLUS...</div>
                            </div>
                    </a>
                </div>
            </article>
            <div class="col-sm-8">
              <div class="row">
                  <aside class="col-sm-4 col-padding">
                   <div class="overlay-image">
                        <a href="sport.php">
                            <img class="image" src="img/tennis.jpg" alt="Alt text"  />          
                                <div class="hover">
                                    <div class="text">SPORTS ET LOISIR</div>
                                </div>
                        </a>
                    </div>
                </aside>
                  <aside class="col-sm-8 col-padding">
                   <div class="overlay-image">
                        <a href="vetement.php">
                            <img class="image" src="img/vetement.jpg" alt="Alt text"  />          
                                <div class="hover">
                                    <div class="text">MODE</div>
                                </div>
                        </a>
                    </div>
                </aside>
                <aside class="col-sm-4 pull-right">
                  <div class="overlay-image">
                        <a href="musique.php">
                            <img class="image" src="img/musique.jpg" alt="Alt text"  />          
                                <div class="hover">
                                    <div class="text">MUSIQUE</div>
                                </div>
                        </a>
                    </div>
                </aside>
                  <aside class="col-sm-8 ">
                  <div class="overlay-image">
                        <a href="livres.php">
                            <img class="image" src="img/livre.jpg" alt="Alt text"  />          
                                <div class="hover">
                                    <div class="text">LIVRES</div>
                                </div>
                        </a>
                    </div>
                </aside>
              </div>
            </div>
          </div>
        </section>
        </div>
    </div>
    <br><br><br><br><br>
    
<a name = "contact"> </a>
  
<div class="container">
    <div  class="row"> 
        <div class="col-sm-4 col-sm-offset-4"><legend><h2>Contactez-nous</h2></legend></div>
    </div>
    </div>
    
    <br> <br> <br>
    
     <div class="container">
      <div class="row">
        <section class="col-sm-12">
          <div class="row">
            <article class="col-sm-5 pull-right">
              <textarea id="textarea" class="form-control" rows="5" placeholder="Ecrivez votre message"></textarea>
                
            </article>
            <div class="col-sm-7">
              <div class="row">
                     <aside class="col-sm-7 pull-right">
                  <input type="text" class="form-control" placeholder="Nom">
                </aside>
                <aside class="col-sm-5">
                 <div style="text-align: left;"> <span class="glyphicon glyphicon-home colorc"></span> 
                <strong> 37 quai de grenelle, Paris 75015</strong></div>
                </aside>
                <aside class="col-sm-7 pull-right">
                  <input type="text" class="form-control" placeholder="E-mail">
                </aside>
                <aside class="col-sm-5">
                 <div style="text-align: left;"> <span class="glyphicon glyphicon-earphone colorc"></span>
                   <strong>+33 (1) 01  48 39 15 </strong></div>
                </aside>
                  <aside class="col-sm-7 pull-right ">
                  <input type="text" class="form-control" placeholder="Object" >
                </aside>
                 <aside class="col-sm-5">
                  <div style="text-align: left;"><span class="glyphicon glyphicon-envelope colorc"></span>
                      <strong>eceamazon@edu.ece.fr </strong></div>
                </aside>
                 
              </div>
            </div>
          </div>
        <div class="row">
         <div class="col-sm-1 pull-right">
            <button type="button" class="btn btn-warning">Envoyer</button>
          </div>
         </div> 
        </section>
        </div>
         <br> <br> <br> <br><br> <br> <br> <br>
         
    </div>
  

    

<!-- Footer -->
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
		<!-- /Footer -->
   
    
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
  $('h1').mouseover(function() {
    $(this).dropdown('toggle');
  });
</script>
    </body>
</html>