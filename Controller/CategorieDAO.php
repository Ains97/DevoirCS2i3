<?php 
require'../Model/Categorie.class.php';

$user='root';
$pwd='';
$server='localhost';
$db='tpdev';
try{
	//$categorie =new Categorie(1,$_POST['nom']);
	//echo $categorie->getNom();
$con=new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pwd);

//$query="INSERT INTO categorie(nom) VALUES ('".$categorie->getNom()."')";
//$query="DELETE FROM categorie where id=1";
//$query="UPDATE categorie SET nom=$categorie->getNom() WHERE id=2";
//$con->exec($query);
$query="SELECT * FROM categorie";
$res=$con->query($query);
while($item=$res->fetch()){
	echo $item['nom'].'</br>';
}
$res->closecursor();

}catch(Exception $e){
	echo "Erreur".$e->getMessage();
}
