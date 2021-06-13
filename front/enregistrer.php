<?php
session_start();
require_once("functions.php");
?>
<!doctype html>
<html lang="en">

  <head>
    <title>Car ESSAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html">CarEssat</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
               <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li ><a href="index.html" class="nav-link">Home</a></li>
                  <li ><a href="voitures.html" class="nav-link">Liste des voitures</a></li>                  
                  <li class="active"><a href="enregistrer.html" >Se Connecter</a></li>
                </ul>
              </nav>
			  
			  
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Espace client</h1>
			  
<p>Vous avez commandé un véhicule et souhaitez en savoir plus sur l'état de votre dossier 
de réservation? Identifiez-vous maintenant!
</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Espace client</h2>
          <p></p>
        </div>
      </div>
        <div class="row">
          <div class="col-md-6 mb-5" >
		  <div class="bg-white p-3 p-md-5">
		  <h3 class="text-black mb-4">Déjà client ? </h3>
            <form action="verif.php" method="post">
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="emailuser" placeholder="Adresse Email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="passworduser" placeholder="Password">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Se connecter">
                </div>
              </div>
            </form>
            <?php
        if (isset($_SESSION["erreur"])){
          ?>
            <div class="alert alert-<?=$_SESSION["type"] ?>">
            <?= $_SESSION["erreur"] ?>
          </div>
            <?php
        unset($_SESSION["erreur"]);
        }
        ?>
			</div>
          </div>
          
		  <div class="col-md-6 mb-5" >
		  <div class="bg-white p-3 p-md-5">
			<h3 class="text-black mb-4">Nouveau client ? </h3>
    
           <form action="save.php" method="get">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" name="nameuser" placeholder="Prenom">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="prenomuser" placeholder="Nom">
                </div>
              </div>
			  <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" name="emailuser" placeholder="Adresse Email">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="passworduser" placeholder="Mot de Passe">
                </div>
              </div>

              
              <div class="form-group row">
                <div class="col-md-12 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Enregistrer">
                </div>
              </div>
            </form>
             
			</div>
          </div>
          
		  
		
		
		
		</div>
      </div>
    </div>


    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">A propos</h2>
                <p> </p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Liste des voitures</a></li>

                </ul>
              </div>
              
              
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Chaker
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

   

	
	
	</div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

