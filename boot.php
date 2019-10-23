<?php

session_start();
$user='root';
$pwd='';
$server='localhost';
$db='tpdev';
	
$con=new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pwd);
$serviceList=$con->query("SELECT * FROM service");


if (!isset($_SESSION['id'])) {
	header('Location: login.php');
}

?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Devoir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar container py-0 bg-white" role="banner">

      <!-- <div class="container"> -->
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">Devoir<span class="text-primary">CS2I3</span>  </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="categorie.php">Categories</a></li>
                <li class="has-children">
                  <a href="">Services</a>
                  <ul class="dropdown">
                    <li><a href="service.php">service Ad</a></li>
                    <li><a href="">Service Publish</a></li>
                  </ul>
                </li>     
                <li><a href="Controller/logout.php">Deconnexion</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div>

        </div>      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        
        <div class="overlap-category mb-5">
          <div class="row align-items-stretch no-gutters">
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
             
            </div>
          </div>
        </div>
        
        

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left border-primary">
            <h2 class="font-weight-light text-primary">Services</h2>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-6">

<!--Debut de creation des blocks -->
			<?php
				while ($d=$serviceList->fetch()) {

			?>
            <div class="d-block d-md-flex listing">
              <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
              <div class="lh-content">
                <span class="category"><?php echo $d['nom']?></span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="">nom du produit</a></h3>
                <address><?php echo $d['description']?></address>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
            </div>

            <?php
						}
		    		?>


            <div class="d-block d-md-flex listing">
                <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
                <div class="lh-content">
                  <span class="category"></span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-single.html"></a></h3>
                  <address></address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                  </p>
                </div>
              </div>

              <div class="d-block d-md-flex listing">
                <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_4.jpg')"></a>
                <div class="lh-content">
                  <span class="category"></span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-single.html"></a></h3>
                  <address></address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                  </p>
                </div>
              </div>

             

          </div>
          <div class="col-lg-6">

            <div class="d-block d-md-flex listing">
              <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_1.jpg')"></a>
              <div class="lh-content">
                <span class="category"></span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="listings-single.html"></a></h3>
                <address></address>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
            </div>

            <div class="d-block d-md-flex listing">
              <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
              <div class="lh-content">
                <span class="category"></span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="listings-single.html"></a></h3>
                <address></address>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
            </div>
            <div class="d-block d-md-flex listing">
                <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
                <div class="lh-content">
                  <span class="category"></span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-single.html"></a></h3>
                  <address></address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                  </p>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section bg-white">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Equipes</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          
      </div>
    </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>