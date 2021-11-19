<!-- include-->
<?php
    session_start();
  require("includes/header.php");
  require('includes/connexionDB.php');
  if (
    isset($_SESSION["userType"]) &&
    !empty($_SESSION["userType"]) &&
    $_SESSION["userType"] == 'client') {
      $requete = 'SELECT *
      FROM projet
      WHERE(idResponsableProjet = '.$_SESSION["userId"].');';
      $listeProjet = mysqli_query($connexiondb, $requete) or die(mysqli_error($connexiondb)) ;
    ?>
<div class="container">
  <nav class="navbar navbar-light fixed-bottom bg-dark">
      <a class="navbar-brand" href="deconnection.php"> 
        <button class="btn btn-outline-danger my-2 my-sm-0" >Se deconnecter</button>
      </a>
  </nav>
</div>

    <section class="hero-wrap hero-wrap-2 ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url('images/blue.png');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Mes projets</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Acueil <i class="ion-ios-arrow-forward"></i></a></span> <span>chef de projet <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
	<section class="ftco-section bg-light">
		<div class="container">
		<div class="row">
            
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="newProjetForm.php" class="block-20 d-flex align-items-end" style="background-image: url('images/add.png');">
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="newProjetForm.php">nouveau projet</a></h3>
                <div class="d-flex align-items-center mt-4">
                </div>
              </div>
            </div>
          </div>
          <!--
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="projet.php" class="block-20 d-flex align-items-end" style="background-image: url('images/projet1.jpg');">
				<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="projet.php">Cultiver du pomme de terre à keur Madiabel</a></h3>
                <p>Aider nous à rassembler 20 000 000 (cent million) de f CFA pour notre projet</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="projet.php" class="btn btn-primary">Voir Plus <span class="ion-ios-arrow-round-forward"></span></a></p>

                </div>
                
                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">obtenue</a>
	                	<a href="#" class="meta-chat"><span></span>12 000 000</a>
	                </p>
                  <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">somme necessaire </a>
	                	<a href="#" class="meta-chat"><span></span>12 000 000</a>
	                </p>
                  <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">revenu estime</a>
	                	<a href="#" class="meta-chat"><span></span>12 000 000</a>
	                </p>
              </div>
            </div>
          </div>
          -->
          <?php
          if (mysqli_num_rows($listeProjet) > 0) {
            while (  $projet = mysqli_fetch_assoc($listeProjet) ) {
              ?>
              
                <div class="col-md-6 col-lg-4 ftco-animate">
                  <div class="blog-entry">
                    <a href=<?php echo '"projet.php?id='.$projet["id"].'"' ?> class="block-20 d-flex align-items-end" style= <?php echo '"background-image: url(\''.$projet["photo"].'\');"' ?> > <!-- style="background-image: url('images/projet1.jpg');" -->
                      <div class="meta-date text-center p-2">
                        <span class="mos">
                          <?php echo $projet["dateLimit"] ?>
                        </span>
                      </div>
                    </a>
                <div class="text bg-white p-4">
                  <h3 class="heading">
                    <a href=<?php echo '"projet.php?id='.$projet["id"].'"' ?>>
                    <?php echo $projet["libelle"] ?>
                    </a>
                  </h3>
                  <p>
                  <?php echo $projet["descriptionProjet"] ?>
                  </p>
                  <div class="d-flex align-items-center mt-4">
                    <p class="mb-0"><a href=<?php echo '"projet.php?id='.$projet["id"].'"' ?> class="btn btn-primary">Voir Plus <span class="ion-ios-arrow-round-forward"></span></a></p>
                  </div>
                
                  <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">obtenue</a>
	                	<a href="#" class="meta-chat"><span></span> <?php echo $projet["montantCollecte"] ?> </a>
	                </p>
                  <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">somme necessaire </a>
	                	<a href="#" class="meta-chat"><span></span> <?php echo $projet["montantNecessaire"] ?> </a>
	                </p>
                  <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">revenu estimé</a>
	                	<a href="#" class="meta-chat"><span></span> <?php echo $projet["revenuDuProjet"] ?> </a>
	                </p>                  
                </div>
              </div>
            </div>
              <?php
            }
          }else{
            echo "liste des projets vides";
          }
          ?>


        </div>
	</div>
    </section>

    <?php
  }else {
    
        ?>

<!-- login section -->
<section class=" ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/blue.png);" data-stellar-background-ratio="0.5">
    <div class="overlay">
      
    <h3 class="mb-4" style="color:white">Connectez-vous avec un compte client pour acceder à  cette page</h3>
  </div>
    <div class="container">
  
      <div class="row justify-content-end">
        <div class="col-md-6 py-5 px-md-5">
          <div class="py-md-5">
            <div class="heading-section heading-section-white ftco-animate mb-5">
              <h2>Se connecter</h2>
            </div>
            <form action="logIn.php" class="appointment-form ftco-animate">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="login" name="pseudo">
                </div>
                <div class="form-group ml-md-4">
                  <input type="password" class="form-control" placeholder="mot de passe" name="motDePasse">
                </div>
              </div>
                <div class="form-group ml-md-4">
                  <input type="submit" value="Se connnecter" class="btn btn-primary py-3 px-4">
                </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  
  </section>
<!-- end login section -->
        <?php    
  }
?>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php require("includes/footer.html"); ?>
  </body>
</html>

