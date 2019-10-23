<?php

require'../Model/Service.class.php';

if(isset($_POST)){
	$user='root';
$pwd='';
$server='localhost';
$db='tpdev';
	
$con=new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pwd);

	$service= new Service(null,$_POST['nom'],$_POST['description'],$_POST['prix'],$_POST['categorie'],$_POST['user']);
	$query="INSERT INTO service(nom,description,prix,categorie_id,user_id) VALUES ('".$service->getNom()."','".$service->getDescription()."','".$service->getPrix()."','".$service->getCategorie()."','".$service->getUser()."')";

	$con->exec($query);

	header('Location: ../service.php');
}


