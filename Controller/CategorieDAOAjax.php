<?php 
require'../Model/Categorie.class.php';

$user='root';
$pwd='';
$server='localhost';
$db='tpdev';
try{
	if (isset($_POST['nom'])) {
		echo "Bon";
		$con=new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pwd);
		$categorie =new Categorie(null,$_POST['nom']);
		$query="INSERT INTO categorie(nom) VALUES ('".$categorie->getNom()."')";
		$con->exec($query);
	}
	
	if(isset($_GET['nom'])){
		$con=new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pwd);
		$query="SELECT * FROM categorie";
		$res=$con->query($query);
		while($item=$res->fetch()){
			echo '<tr><td>'.$item['id'].'</tr></td>';
			echo '<tr><td>'.$item['nom'].'</tr></td>';
			
			
	
		
}
	$res->closecursor();
	}
	//echo $categorie->getNom();

//$query="DELETE FROM categorie where id=1";
//$query="UPDATE categorie SET nom=$categorie->getNom() WHERE id=2";



}catch(Exception $e){
	echo "Erreur".$e->getMessage();
}
