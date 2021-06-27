<?php
error_reporting (E_ALL ^ E_NOTICE);
extract($_REQUEST);

$hostname="localhost";
$username="root";
$password="";
$dbname="mycar2hand_db";

/*
$username="xx_user";
$password="010535546";
$dbname="xx_db";
*/



$conn=mysqli_connect($hostname,$username,$password);
mysqli_query($conn,"SET NAMES utf8");
mysqli_select_db($conn,  $dbname);







?>