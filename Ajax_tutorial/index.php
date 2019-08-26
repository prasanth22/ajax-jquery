<?php
    include 'db.php';
?>
<!DOCTYPE html>
<html>
 <head>
  <title>chat system</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  
  <script>
  	function ajax(){
  		var req = new XMLHttpRequest();
  		req.onreadystatechange = function(){
  			if(req.readyState == 4 && req.status == 200){
  				document.getElementById('chat').innerHTML = req.responseText;
  			}
  		}
  		req.open('GET','chat.php',true);
  		req.send();
  	}
  	setInterval(function(){ajax()},1000);
  </script>
</head>

<body onload="ajax();">
	<div id="container">
		<div id="chat">
		</div>
	
		
	<div id="chat_box">
			
		<form method="post" action="index.php">
			<input type="text" name="name" placeholder="enter name">
			<textarea name="msg" placeholder="enter message"></textarea>
			<input type="submit" name="submit" value="submit it">
	   </form>
	
    
	 <?php
	  if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$msg = $_POST['msg'];

		 $query = "INSERT INTO chat (name,msg) VALUES ('$name','$msg')";
		 $run =$con->query($query);

		 if($run){
		 	echo "<embed loop='false' src='chat.mp3' hidden ='true' autoplay='true'/>";

		 }
	   }
	  ?>

  </div>
</div>
	
	
</body>