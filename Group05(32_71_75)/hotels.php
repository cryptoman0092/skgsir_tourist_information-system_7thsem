<?php
include("connection.php");
error_reporting(0);
if(count($_POST)!=0){
    extract($_POST);
    $query="INSERT INTO hotels(user,hname,person,cdate,odate)
     values('$user','$hname','$person','$cdate','$odate')";
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
    <h2 class="user"> Hotels booking</h2>
  <form action="" method="POST" name="hotelform">
         <div>
        <input type="text" name="user" class="inputbox"  value="" placeholder="username" required>
        </div>
        <br>

        <div>
            <input type="text" name="hname" class="inputbox"value="" placeholder="Hotel Name" required>
        </div> 
        <br>

        <div>
            <input type="number" name="person" class="inputbox" value="" placeholder="No of people" required>
        </div>
        <br>

        <div><label class="text-align-center">check-in-date</label>
            <input type="date" name="cdate" class="inputbox" value="" placeholder="checkin-Date" required>
        </div>
        <br>

        <div><label style="text-align:center,text-color:red;">check-out-date</label>
            <input type="date" name="odate" class="inputbox" placeholder="checkout-Date"  required>
        </div>
        <br>
           
        <div>
             <button type="submit" name="submit" class="buttonsbt" > Confirm Booking </button>
        </div>
       <br>

         </form>

            
     </div>
</div>
    </body>
</html>