<!-- include -->
<?php
	session_start();
	require("includes/header.php");
	if (isset($_SESSION['error']) && !empty($_SESSION['error']) && $_SESSION['error'] = 'user is not found') {
		echo '<script> alert("login ou mot de passe incorrect") </script>';
		$_SESSION['error'] = '';
	}
?>

<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/senegalRural.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Give To Get Foundation</h1>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/senegalRural1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Give To Get Foundation</h1>
          </div>
        </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url(images/zoneDaide.jpg); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
			  <h2 class="mb-4">Votre zone d'aide</h2>
			  	<div class="row mt-5">
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="text pl-3">
									<h3>
										<div class="icon mt-2 d-flex justify-content-center align-items-center">Dakar</div>
									</h3>
								</div>
							</div>
						</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text pl-3">
										<h3>
											<div class="icon mt-2 d-flex justify-content-center align-items-center">Kaolack</div>
										</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text pl-3">
										<h3>
											<div class="icon mt-2 d-flex justify-content-center align-items-center">Thies</div>
										</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text pl-3">
										<h3>
											<div class="icon mt-2 d-flex justify-content-center align-items-center">Fatick</div>
										</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text pl-3">
										<h3>
											<div class="icon mt-2 d-flex justify-content-center align-items-center">Saint-Louis</div>
										</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text pl-3">
										<h3>
											<div class="icon mt-2 d-flex justify-content-center align-items-center">Kaffrine</div>
										</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text pl-3">
										<h3>
											<div class="icon mt-2 d-flex justify-content-center align-items-center">Louga</div>
										</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text pl-3">
										<h3>
											<div class="icon mt-2 d-flex justify-content-center align-items-center">Diourbel</div>
										</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text pl-3">
										<h3>
											<div class="icon mt-2 d-flex justify-content-center align-items-center">Matam</div>
										</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text pl-3">
										<h3>
											<div class="icon mt-2 d-flex justify-content-center align-items-center">Kolda</div>
										</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text pl-3">
										<h3>
											<div class="icon mt-2 d-flex justify-content-center align-items-center">Sedhiou</div>
										</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="text pl-3">
										<h3>
											<div class="icon mt-2 d-flex justify-content-center align-items-center">Tamba</div>
										</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/keurMadiabel.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<div class="img img-video d-flex align-items-center" style="background-image: url(images/keurMadiabel.jpg);">
    					<div class="video justify-content-center">
								<a href="https://www.youtube.com/watch?v=7XkcOlT_qXs" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
									<span class="ion-ios-play"></span>
		  					</a>
							</div>
    				</div>
    			</div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">Projet En Cours</h2>
            <div class="sidebar-box ftco-animate">
            	<h3>keur Madiabel</h3>
              <ul class="categories" >
                <li><a href="#" style="color: white">Projet <span>construction Mosquée</span></a></li>
                <li><a href="#" style="color: white">Cout<span>1.000.00Fcfa</span></a></li>
                <li><a href="#" style="color: white">Zone <span>Keur Madiabel</span></a></li>
                <li><a href="#" style="color: white">Moyen <span>Agriculture</span></a></li>
                <li><a href="#" style="color: white">Surface <span>2 hectar</span></a></li>
                <li><a href="#" style="color: white">Graine <span>Arachide</span></a></li>
                <li><a href="#" style="color: white">Cout <span>500.000Fcfa</span></a></li>
              </ul>
			</div>
		</div>
        </div>	
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="500">0</strong>kg
		                <span>Semance</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="25000">0</strong>kg
		                <span>recolte</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="2000000">0</strong>Fcfa
		                <span>Revenu</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>


		<section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Aide</span>  Sociale</h2>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/aideSocial.jpg);"></div>
						<div class="text pt-4">
							<h3><a href="investor.php">Ecole keur Madiabel</a></h3>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							<p><a href="investor.php" class="btn btn-primary">faire un don</a></p>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/aideSocial1.jpg);"></div>
						<div class="text pt-4">
							<h3><a href="investor.php">Victime Innondation</a></h3>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							<p><a href="investor.php" class="btn btn-primary">faire un don</a></p>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/aideSocial2.jpg);"></div>
						<div class="text pt-4">
							<h3><a href="investor.php">Victime incendie</a></h3>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							<p><a href="investor.php" class="btn btn-primary">faire un don</a></p>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/aideSocial3.jpg);"></div>
						<div class="text pt-4">
							<h3><a href="investor.php">hôpitaux</a></h3>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							<p><a href="investor.php" class="btn btn-primary">faire un don</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		
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