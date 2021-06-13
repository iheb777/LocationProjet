<?php
session_start();
require_once("functions.php");

if(!isset($_SESSION["user"]))
  header("location:enregistrer.php");

if(!isset($_GET["id_modele"]))
header("location:liste.php");


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
                  <li class="active"><a href="accueil.php" class="nav-link">Home</a></li>
                  <li><a href="liste.php" class="nav-link">Liste des voitures</a></li>                  
                  <li><a href="enregistrer.php" >Se Connecter</a></li>
                </ul>
              </nav>
			  
			  
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">       
      </div>
    </div>

    <div class="site-section pt-0 pb-0 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
          
              <form class="trip-form" method="GET" action="save2.php">
                <div class="row align-items-center mb-4">
                  <div class="col-md-6">
                    <h3 class="m-0">Réservez votre voiture de location</h3>
                  </div>
                  <div class="col-md-6 text-md-right">
                  <?php $prods=getAllVoitureByModelID($_GET["id_modele"]); ?>
                    <span class="text-primary"><?=count($prods)?></span> <span><?=getModeleById($_GET["id_modele"])[0]->titre ?> disponibles</span></span>
                  </div>
                </div>
                <div class="row">
				  <div class="form-group col-md-3"> 
          <label for="cf-1">Voiture</label>
					<select class="form-control" name="voiture">
          <?php
            
            foreach($prods as $k=>$w){
              ?>
                   
						<option value="<?=$w->id_voiture?>"><?=$w->matricule?></option>
					<?php
                }
                ?>
					</select>
             
                  </div>
                  <div class="form-group col-md-3">
                    <label for="cf-1">Ville Départ</label>
                    <input type="text" id="cf-1" placeholder="Ville Départ" name="villeDep" class="form-control">
                  </div>
                  
                  <div class="form-group col-md-3">
                    <label for="cf-3">Date de prise</label>
                    <input type="text" id="cf-3" placeholder="Date de prise" name="dateP" class="form-control datepicker px-3">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="cf-4">Date de retour</label>
                    <input type="text" id="cf-4" placeholder="Date de retour" name="dateR" class="form-control datepicker px-3">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <input type="submit" value="Submit" class="btn btn-primary">
                  </div>
                </div>
              </form>
              
            </div>
        </div>
      </div>
    </div>

    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h3>Nos promotions</h3>
            <p class="mb-4">Profitez des nos meilleures offres de location voiture Tunisie chez Car_ESSAT, un des leaders de loueurs de voitures en Tunisie</p>
            <p>
              <a href="#" class="btn btn-primary custom-prev">Previous</a>
              <span class="mx-2">/</span>
              <a href="#" class="btn btn-primary custom-next">Next</a>
            </p>
          </div>
          <div class="col-lg-9">




            <div class="nonloop-block-13 owl-carousel">
              <div class="item-1">
                <a href="#"><img src="images/12.jpg" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#">Voiture1 </a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span><font color="red">250</font> DT/</span>Jour</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Portes</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Coffre</span>
                      <span class="spec">300 dm3</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Manuelle</span>
                    </li>
                    <li>
                      <span>Année</span>
                      <span class="spec">2019</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                    <a href="enregistrer.php" class="btn btn-primary">Réserver</a>
                  </div>
                </div>
              </div>


              <div class="item-1">
                <a href="#"><img src="images/10.jpg" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#">Voiture1 </a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span><font color="red">250</font> DT/</span>Jour</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Portes</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Coffre</span>
                      <span class="spec">300 dm3</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Manuelle</span>
                    </li>
                    <li>
                      <span>Année</span>
                      <span class="spec">2019</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                    <a href="enregistrer.html" class="btn btn-primary">Réserver</a>
                  </div>
                </div>
              </div>


			 
			 
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section section-3" style="background-image: url('images/hero_2.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-white">Our services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-car-1"></span>
              </span>
              <div class="service-1-contents">
                <h3>Réparation instantanée </h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-traffic"></span>
              </span>
              <div class="service-1-contents">
                <h3>variété des accessoires</h3>                
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-valet"></span>
              </span>
              <div class="service-1-contents">
                <h3>Location avec Chauffeur</h3>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2>Ce qu'en disent nos clients</h2>
            <p></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Agent professionnel, jovial et serviable, je recommande votre agence aux professionnels "</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                <span>Ali Ben Salah</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Top ! Rien à dire. Disponibilité, gentillesse du personnel ainsi que etat de la voiture. Je reviend."</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                <span>Aya Ben SAlah</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Excellent loueur, rien d'autres, merci pour votre service. Je reviens dans un autre temps"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                <span>Amira ben salah</span>
              </div>
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
