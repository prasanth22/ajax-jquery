<?php
$conn = mysqli_connect("localhost","root","","test");

  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];

  $sel = "select * from users where username = '$username'";
  $run = mysqli_query($conn,$sel);
  $check_username = mysqli_num_rows($run);

  if($check_username == 1){

    echo"User name already exists";
    exit();

  }

  $sel = "select * from users where email = '$email'";
  $run = mysqli_query($conn,$sel);
  $check_email = mysqli_num_rows($run);

  if($check_email == 1){

  	echo"Email already exists";
  	exit();

  }
  else{

  	$insert = "insert into users (name,username,email,pass) values ('$name','$username','$email','$pass')";
  	$run = mysqli_query($conn,$insert);
  	if($run){
  		echo "Registration is successful";
  	}
  }

?>