<?php

$host="localhost";
$db="MyTicket";
$user="root";
$pass="";

$conn=@mysql_connect($host,$user,$pass) or die("Mysqle Baglanamadi");
mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");

?>

