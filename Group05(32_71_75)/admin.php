<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>

<h2>Admin panel</h2>

<div class="card">
<a href="htravels.php"><img src="images/s3.jpg" alt="Avatar" style="width:100%"></a>
  <div class="container">
  <h2><b><a href="hdispaly.php">Hotels booking details</a></b></h2>
  </div>
  <a href="hdispaly.php"><img src="images/s2.jpg" alt="Avatar" style="width:100%"></a>
  <div class="container">
    <h2><b><a href="hdispaly.php">Travels booking details</a></b></h2> 
    
  </div>
  <a href="rgdisplay.php"><img src="images/p1.jpg" alt="Avatar" style="width:100%"></a>
  <div class="container">
    <h2><b><a href="rgdisplay.php">Registration details</a></b></h2> 
    
  </div>
</div>


</body>
</html> 
