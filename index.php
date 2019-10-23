<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Devoir</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body onload="createRain();">
	<section class="rain"></section>
	<section class="header">
<video autoplay loop muted class="video-background">
	<source src="video/SunSunset.mp4 " type="video/mp4">

</video>
	 <nav class="navbar navbar-expand-lg navbar-light bg-light" style="opacity: 0.7">
				<a class="navbar-brand" href="#">Navbar
				</a>
				 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			  	</button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      	<li class="nav-item active">
			        <a class="nav-link" href="login.php">Connexion<span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item">
			        <a class="nav-link" href="#">Enregistrement</a>
			      	</li>
			      	
			   </ul> 
			  </div>
</nav>
</section>
<script type="text/javascript">
	var nbDrop=858;
	function randRange(minNum,maxNum){
		return (Math.floor(Math.random()*(maxNum-minNum +1)) +minNum);
	}

	function createRain(){
		for(i=1;i<nbDrop;i++){
			var dropLeft=randRange(0,1600);
			var dropTop=randRange(-1000,1400);

			$('.rain').append('<div class="drop" id="drop'+i+'"></div>');
			$('#drop'+i).css('left',dropLeft);
			$('#drop'+i).css('top',dropTop);
		}
	}
</script>
</body>
</html>