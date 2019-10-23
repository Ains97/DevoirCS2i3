<?php


//require'Model/Service.class.php';
require'Model/Categorie.class.php';

/*echo 'Hello World';
$a=0;
for($i=0;$i<=18;$i++){

	if($i%2==0){
	 $chiffre=$i.' ';
	 echo $chiffre;
	}
}*
function Hello(){
	echo "Bonjour!!!!";
}

Hello();

function add($a,$b){
	$s=$a+$b;
	echo $s;
}

add(18,20);

$i=10;
test($i);
echo $i;

function test(&$a){
	$a+=1;
	echo $a;
}*/


//$service=new Service();
$categorie =new Categorie(1,'aliment');
echo $categorie->getNom();