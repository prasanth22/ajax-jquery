<?php
$conn = mysqli_connect("localhost","root","","test");

  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $sel = "select * from users where email = '$email'";
  $run = mysqli_query($conn,$sel);
  $check_email = mysqli_num_rows($run);

  if($check_email == 1){

  	echo"email already exists";
  	exit();

  }
  else{

  	$insert = "insert into users (name,email,pass) values ('$name','$email','$pass')";
  	$run = mysqli_query($conn,$insert);
  	if($run){
  		echo "registration is successful";
  	}
  }

?>