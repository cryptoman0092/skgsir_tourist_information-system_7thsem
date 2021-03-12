<?php
include("connection.php");
error_reporting(0);
if(count($_POST)!=0){
    extract($_POST);
    extract($_GET); 
    $query=" UPDATE travels SET date='$bdate', travelm='$travelm', source='$source', destination='$destination', price='$price' 
     WHERE user='$user' ";
     $result=mysqli_query($conn,$query);
     if($result==true){
         echo "result recorded successfully";
     }
     else{
         echo "failed";
     }

}
?>

<!doctype html5>
<html>
    <head>
    <meta charset="UTF-8">
        <title>hotels booking from trio-tourism</title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
    <h2 class="user"> booking for travelling</h2>
  <form action="" method="POST" name="travelform">
    
     <div>
            <input type="text" name="user" class="inputbox" placeholder="username" required>
        </div>
        <br>

        <div>
            <input type="date" name="bdate" class="inputbox" placeholder="Date" required>
        </div>
        <br>

         <div> 
            <input type="text" name="travelm" class="inputbox" placeholder="mode of travel" required>
        </div>
        <br>

        <div>    
            <input type="text" name="source" class="inputbox" placeholder="from" required>
        </div>
        <br>

        <div>
            
            <input type="text" name="destination" class="inputbox" placeholder="to" required>
        </div>
        <br>

        <div>
            <input type="number" name="price" class="inputbox" placeholder="price" required>
        </div>
        <br>

        <div>
            <button type="submit" class="buttonsbt" name="submit" >update booking </button>
        </div>
       <br>

         </form>
     </div>
</div>


    </body>
</html>