<?php
if(isset($_POST)){
$user='root';
$pwd='';
$server='localhost';
$db='tpdev';
	
$con=new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pwd);

$email = $_POST['email'];
$password = md5($_POST['password']);
$query = $con->query("SELECT * FROM utilisateur WHERE email ='$email' AND mdp ='$password'");
$count = $query->rowcount();
$row = $query->fetch();
 
if ($count > 0)
	{
	session_start();
	$_SESSION['id'] = $row['id'];
	header('location:../boot.php');
	}
}  else
	{
		echo "Mot de passe incorrect";
}