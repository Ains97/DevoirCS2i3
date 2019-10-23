<?php

$user='root';
$pwd='';
$server='localhost';
$db='tpdev';
	
$con=new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pwd);

$categoryList=$con->query("SELECT * FROM categorie");
$userList=$con->query("SELECT * FROM utilisateur");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Service publish</title>
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
	
	<div class="modal-dialog text-center">
		<h1 class="title">Nos Services</h1>
		<div class="col-sm-9 main-section">
			<div class="modal-content">
				<!-- <div class="col-12 user-img">
					<img src="img/use.png">
				</div> -->

				<div class="col-md-12 form-input">
					<form method='post' action="Controller/serviceDAO.php">
						<div class="row form-group">
							<div class="col-md-12">
								<input type="text" class="form-control" placeholder="Nom" name="nom">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
							<input type="number" class="form-control" placeholder="prix" name="prix">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
							<input type="text" class="form-control" placeholder="Description" name="description">
							</div>
						</div>
						<div class=" form-group">
							<div class="col-md-12">
							 <label for="sel1">Utilisateur</label>
							  <select class="row form-control" id="sel1" name="user">
							   <?php
							   	while($u=$userList->fetch()){
							   		echo "<option value='".$u['id']."'>".$u['nom']."</option>";
							   	}
							   ?>
							  </select>
							</div>
						</div>
						<div class=" form-group">
							<div class="col-md-12">
							 <label for="sel1">Categorie</label>
							  <select class="row form-control" id="sel1" name="categorie">
							   <?php
							   	while($c=$categoryList->fetch()){
							   		echo "<option value='".$c['id']."'>".$c['nom']."</option>";
							   	}
							   ?>
							  </select>
							</div>
						</div>
						<button type="submit" class="btn btn-success">Enregistrer</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>