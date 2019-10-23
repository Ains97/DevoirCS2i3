<?php
$user='root';
$pwd='';
$server='localhost';
$db='tpdev';
	
$con=new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pwd);
$serviceList=$con->query("SELECT * FROM service");


?>







<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
	  <!-- Header -->
	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">Navbar
				</a>
				 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			  	</button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      	<li class="nav-item active">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item">
			        <a class="nav-link" href="#">Link</a>
			      	</li>
			      	<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Dropdown
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			      	</li>
			      	<li class="nav-item">
			        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			      	</li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>
			    <a class="nav-link" href="Controller/logout.php">Deconnexion</a>
			  </div>
</nav>
<!--End Header-->
<!--Start body-->
<div class="bd-example" style="margin-bottom: 2%;">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/fete-montagne2017.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/im.jfif" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/i.jfif" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


		<div class="row">
		    <div class="col-10">

		    	<div class="row">
		    		<?php
		    		while ($d=$serviceList->fetch()) {
		    		?>
		    		<div class="col-6">
		    			<div class="card" style="width: 18rem;">
						  <img src="img/in.jfif" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $d['nom']?></h5>
						    <p class="card-text"><?php echo $d['description']?></p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
		    		</div>
		    		<?php
						}
		    		?>

		    	
		    		<div class="col-6">
		    			<div class="card" style="width: 18rem;">
						  <img src="img/in.jfif" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
		    		</div>

		    		<div class="col-6">
		    			<div class="card" style="width: 18rem;">
						  <img src="img/koki.jfif" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
		    		</div>

		    		<div class="col-6">
		    			<div class="card" style="width: 18rem;">
						  <img src="img/poisson.jfif" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
		    		</div>

		    		<div class="col-6">
		    			<div class="card" style="width: 18rem;">
						  <img src="img/poulet.jfif" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
		    		</div>
		    	</div>
		    </div>
		    <div class="col-2"><img src="img/gui.jpg" height="300px" width="100px"></div>
		</div>

</div>

<!--End body-->
<!--Start footer-->
<div>
	<p class="text-center">
		&copy; 2019 CS2I3 Tous droits reservés
	</p>
</div>
<!--End footer-->
	</div>
	
</body>
</html>