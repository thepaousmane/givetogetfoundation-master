<!-- include -->
<?php
  session_start();
  require('includes/connexionDB.php');
  if (!empty($_REQUEST["id"])) {
    $_SESSION["projetId"] = $_REQUEST["id"];

  }
  if (isset($_SESSION["projetId"]) && !empty($_SESSION["projetId"]) ) {

    $requete = 'SELECT projet.*, responsable.nomComplet
    FROM projet , utilisateur as responsable
    WHERE(projet.id = '.$_SESSION["projetId"].' AND responsable.id = projet.idResponsableProjet);';
    $projet = mysqli_query($connexiondb, $requete) or die(mysqli_error($connexiondb));
  
    $requete = 'SELECT annonce.*
    FROM avancementprojet as annonce
    WHERE(annonce.idProjet = '.$_SESSION["projetId"].');';
    $annonces = mysqli_query($connexiondb, $requete) or die(mysqli_error($connexiondb));

  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Give To Get Foundation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html">Give To Get <span>Foundation</span></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>youremail@email.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>appel</span>
						    	<span>telephone: + 1235 2355 98</span>
						    </div>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
  </div>
  
  	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center px-4">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a href="index.php" class="nav-link pl-0">Accueil</a></li>
        <li class="nav-item"><a href="investor.php" class="nav-link">investisseur</a></li>
        <li class="nav-item"><a href="client.php" class="nav-link">client</a></li>
        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>

        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li>
        <div class="dropdown">
          <button id="register" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Créer un compte
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="clientRegister.php">Compte client</a>
            <a class="dropdown-item" href="investorRegister.php">Compte investisseur</a>
          </div>
        </div>					  
        </li>
      </ul>
      </div>
    </div>
    </nav>
  <!-- END nav --> 


    <!-- bottom nav-->
    <div class="container">
    <nav class="navbar navbar-light fixed-bottom bg-dark">
        <a class="navbar-brand" href="deconnection.php"> 
            <button class="btn btn-outline-danger my-2 my-sm-0" >Se deconnecter</button>
        </a>
    </nav>
    </div>
    <!-- END bottom nav-->

<section class="hero-wrap hero-wrap-2 ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url('images/grey.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Détails du projet</h1>
             <p class="breadcrumbs">
              <span class="mr-2"><a href="index.php">Accueil <i class="ion-ios-arrow-forward"></i></a></span>
              <?php
                if (
                  isset($_SESSION["userType"]) &&
                  !empty($_SESSION["userType"]) &&
                  $_SESSION["userType"] == 'investisseur') {
              ?>
                <span class="mr-2"><a href="investor.php">Investisseur <i class="ion-ios-arrow-forward"></i></a></span>
              <?php
                  }elseif (
                    isset($_SESSION["userType"]) &&
                    !empty($_SESSION["userType"]) &&
                    $_SESSION["userType"] == 'client') {
              ?>
                <span class="mr-2"><a href="client.php">client <i class="ion-ios-arrow-forward"></i></a></span>
              <?php
                    }
              ?>  
              <span>Projet <i class="ion-ios-arrow-forward"></i></span>
             </p>
          </div>
        </div>
      </div>
</section>


<?php

if (mysqli_num_rows($projet) > 0) {
  $detailsProjet = mysqli_fetch_assoc($projet);
?>
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">
              <?php echo $detailsProjet["libelle"]?>
            </h2>
            <p>
              <?php echo $detailsProjet["descriptionProjet"]?>
            </p>
            <p>
              <img src= <?php echo '"'.$detailsProjet["photo"].'"' ?> alt="" class="img-fluid">
            </p>
            <?php
              if (mysqli_num_rows($annonces) > 0) {
                while ($annonce = mysqli_fetch_assoc($annonces)) {
                  ?>
                    <h3> <?php echo $annonce["libelle"]; ?> </h3>
                    <div class="card" style="width: 18rem;">
                      <img src=<?php echo '"'.$annonce["photo"].'"' ?> class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5> <?php echo $annonce["dateAnnonce"]; ?> </h5>
                      </div>
                    </div>                                
                    <p>
                      <?php echo $annonce["descriptionAnnonce"]; ?>
                    </p>
                  <?php
                }
              }else {
                ?>
                <br>
                <br>
                <br>
                <h3>liste des annonces vide</h3>
                <br>
                <br>
                <br>
              <?php
              }
            ?>
            <!--
            <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
            <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
            <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
            <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>
            -->
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="images/person.png" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>Responsable du projet : <br/> <?php echo $detailsProjet["nomComplet"] ?> </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div>

            </div>
          </div> <!-- .col-md-8 -->
<?php  
}
?>		

    <?php
      if (
        isset($_SESSION["userType"]) &&
        !empty($_SESSION["userType"]) &&
        $_SESSION["userType"] == 'investisseur') {
        ?>
    <section class="ftco-section contact-section">
      <div class="container">
        <h1>Choix d'investissement</h1>
        <div class="row d-flex contact-info">
          
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">investissement avec retour</h3>
	            <p>un investissement  qui entraîne un retour sur investissement dépendant du village et du produit sélectionné </p>
              
              <div class="col-md topper">
					    	<p class="mb-0">
					    		<a href="#" class="btn px-3 btn-primary">
					    			<span>Investir</span>
					    		</a>
					    	</p>
              </div>
              
            </div>
          </div>

          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center" style="background-image: url('images/grey.png');">
          		<h3 class="mb-4">Faire un don</h3>
              <p>Un Don qui n’entraîne aucun retour. </p>

					    <div class="col-md topper">
					    	<p class="mb-0">
					    		<a href="#" class="btn px-3 btn-primary ">
					    			<span>Faire un don</span>
					    		</a>
					    	</p>
              </div>
                           
	          </div>
          </div>
          
        </div>
      </div>
    </section>        
        <?php
      } elseif (
        isset($_SESSION["userType"]) &&
        !empty($_SESSION["userType"]) &&
        $_SESSION["userType"] == 'client') {
        ?>
          <!-- new annonce link -->
          <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
              <a href="newAnnonceForm.php">
                <img src="images/add.png" alt="Image placeholder" class="img-fluid mb-4">
              </a>
              </div>
              <div class="desc">
                <h3>Nouvelle annonces</h3>
                <p>
                  Les annonces vous permettent de renseigner les informations sur l'avancement du projet.
                  Ils sont trés importants puisqu'ils permettent aux investisseurs d'avoir une suivie du projet et maintiennent la relation de confiance entre les investisseurs et les clients
                </p>
              </div>
            </div>                  
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