<?php
$user='root';
$pwd='';
$server='localhost';
$db='tpdev';

$con=new PDO("mysql:host=$server,dbname=$db,charset=utf8",$user,$pwd);