<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "chat";

$con = mysqli_connect($host,$user,$pass,$db_name);

function formatDate($date){
	return date('g:i a' , strtotime($date));
}


?>