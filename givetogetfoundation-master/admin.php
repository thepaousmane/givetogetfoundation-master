<!-- include-->
<?php
    session_start();
  require("includes/header.php");
  require('includes/connexionDB.php');

  if (
    isset($_SESSION["userType"]) &&
    !empty($_SESSION["userType"]) &&
    $_SESSION["userType"] == 'admin') {
?>





<!-- deconnexion div-->
<div class="container">
  <nav class="navbar navbar-light fixed-bottom bg-dark">
      <a class="navbar-brand" href="deconnection.php"> 
        <button class="btn btn-outline-danger my-2 my-sm-0" >Se deconnecter</button>
      </a>
  </nav>
</div>
<!-- deconnexion div-->

<div class="container">
<br><br>

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#TableauUtilisateur" role="button" aria-expanded="false" aria-controls="collapseExample">
    Liste des Utilisateurs
  </a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#TableauProjet" aria-expanded="false" aria-controls="collapseExample">
    Liste des Projets
  </button>
</p>
<div class="collapse" id="TableauUtilisateur">
  <div class="card card-body"><table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nom complet</th>
                <th scope="col">Pseudo</th>
                <th scope="col">Telephone</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
                <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mouss</td>
                <td>taf</td>
                <td>771748749</td>
                <td>Mous@live.fr</td>
                <td>Investisseur</td>
                <td>
                     
                    <button type="button" class="btn btn-danger">
                      <span class="icon-delete_forever"></span>
                    </button>
                    <button type="button" class="btn btn-dark">
                      <span class= "icon-mode_edit"></span>
                    </button>
                     <button type="button" class="btn btn-dark">
                      <span class= "icon-plus"></span>
                    </button>
                </td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
            </table>
    
  </div>
</div>
<div class="collapse" id="TableauProjet">
  <div class="card card-body"><table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">libellé</th>
                <th scope="col">MontantCollécté</th>
                <th scope="col">Montant necessaire</th>
                <th scope="col">Revenu</th>
                <th scope="col">Date limite</th>
                <th scope="col">Village</th>
                 <th scope="col">etat du projet</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>52</td>
                <td>107555</td>
                <td>3000000</td>
                <td>21/02/2022</td>
                <td>Bambey</td>
                <td>Bambey</td>
                <td>
                     
                     <div class="progress">
                     <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">50%</div>
                     </div>
                </td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
            </table>
    
  </div>
</div>

        <!-- table -->
        

            <br><br>
        <!-- table -->
 
  </div>

<?
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
            <form action="loginAdmin.php" class="appointment-form ftco-animate">
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


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>