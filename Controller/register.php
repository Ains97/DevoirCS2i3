<?php

require'../Model/Utilisateur.classe.php';

if(isset($_POST)){
	$user='root';
$pwd='';
$server='localhost';
$db='tpdev';
	
$con=new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pwd);

	$user= new Utilisateur(null,$_POST['nom'],$_POST['prenom'],md5($_POST['mdp']),$_POST['compte'],$_POST['telephone'],$_POST['email']);
	$query="INSERT INTO utilisateur (nom,prenom,mdp,compte,telephone,email) VALUES ('".$user->getNom()."','".$user->getPrenom()."','".$user->getMdp()."','".$user->getCompte()."','".$user->getTelephone()."','".$user->getEmail()."')";

var_dump($user);
	$con->exec($query);

	header('Location: ../login.php');
}