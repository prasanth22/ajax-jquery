<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Ajax</title>
   <link rel="stylesheet" type="text/css" href="styles.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script type="text/javascript">
    $(document).ready(function(){
      $("#sub").click(function(){
        var name = $("#name").val();
        var user_name = $("#username").val();
        var user_email = $("#email").val();
        var user_pass = $("#pass").val();
        var user_cpass = $("#cpass").val();

        /*
        $.post("test.php",{name:user_name,email:user_email,pass:user_pass},function(data){
          $("#result").html(data);
              */
              $.ajax({
                url:'test.php',
                data:{name:name,username:user_name,email:user_email,pass:user_pass,cpass:user_cpass},
                type:'POST',
                success:function(data){
                  $("#result").html(data);
                           
                }
               });
      });
    });

   </script>
</head>
<body>
  <div id="box">
   
    <div id="result"></div>

    <h2>New user register here:</h2>

    <form method="post">

    <label>Name :</label>
    <input type="text" name="name" id="name" placeholder="enter your name"/><br><br>

    <label>User Name :</label>
    <input type="text" name="username" id="username" placeholder="enter your user name" ><br><br>
    
    <label>E-mail :</label>
    <input type="text" name="email" id="email" placeholder="enter your email"/><br><br>
    
    <label>Password :</label>
    <input type="password" name="pass" id="pass" placeholder="enter your password"/><br><br>
     
    <label>Confirm Password :</label>
    <input type="password" name="cpassword" id="cpass"  placeholder="confirm Password" ><br><br>

    <select name="country" class="countries" id="countryId">
    <option value="">Select Country</option>
    </select>
    <select name="state" class="states" id="stateId">
        <option value="">Select State</option>
    </select>
    <select name="city" class="cities" id="cityId">
        <option value="">Select City</option>
    </select><br><br>
    
      Create an invoice: <input type="checkbox" id="myCheck"  onclick="myFunction()"><br><br>
    

    <input type="submit" name="sub" value="submit" id="sub"/><br>

  </form>

  

    <p id="text" style="display:none">
          <?php
    if(isset($_POST['sub'])){
    $country = $_POST["country"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    echo "You have selected :".$country; 
    echo "<br>".$state;
    echo "<br>".$city;
     // Displaying Selected Value
    }
    ?>
    </p>
    
  </div>

  <script>
    function myFunction() {
      var checkBox = document.getElementById("myCheck");
      var text = document.getElementById("text");
      if (checkBox.checked == true){
        text.style.display = "block";
      } else {
         text.style.display = "none";
      }
    }
  </script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
  <script src="//geodata.solutions/includes/countrystatecity.js"></script>
  
</body>
</html>