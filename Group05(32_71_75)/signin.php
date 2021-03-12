<?php
include 'connection.php';
error_reporting(0);
?>


<!Doctype html5>
<html>
<head>
<meta charset="UTF-8">
<title> login form</title>
<link rel="stylesheet" type="text/css" href="logstyle.css">
<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" 
rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div class="bgimg">
   <div class="centerdiv">
   <img src="https://cdn1.iconfinder.com/data/icons/flat-business-icons/128/user-128.png"
    id="profilepic">
    <h2  class="user">User Login</h2>
    <form action="#", method="POST">
        <div>
            <input type="text" name="user" class="inputbox" placeholder="username">
        </div>
        <br>
        <div>
            <input type="password" name="pass" class="inputbox" placeholder="password">
        </div>
        <br>
        <div>
            <button type="submit" class="buttonsbt" name="submit" >Log In </button>
        </div>
        <br>
        
    </form><br>
    <?php
  if(isset($_POST['submit'])){
      $user=$_POST['user'];
      $pw=$_POST['pass'];
      $query="SELECT * FROM register WHERE Name='$user' && Password='$pw' ";
      $result=mysqli_query($conn,$query);
      $total=mysqli_num_rows($result);
      echo $total;
      if($total==1){
       $_SESSION['user']=$user;
          header("location:users.php");
          die;
      }
      else{
          echo "<font color='red'>login failed</font>";
      }
  }
?>
    <div  style="text-align:center;"><b class="text-danger">Don't have an acoount? </b><a href=regsig.php>signup</a></div>
   </div>

</div>

</body>

</html>