<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <title>travels booking from trio-tourism</title>
        <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" 
rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

   <div class="container">
         <div class="row">
            <div class="col-lg-12">
           
            <table class="table">
  <thead>
    <tr>
      <th scope="col">user</th>
      <th scope="col">bdate</th>
      <th scope="col">travel mode</th>
      <th scope="col">source</th>
      <th scope="col">destination</th>
      <th scope="col">price</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <?php 
  include 'connection.php';
   $query="SELECT * FROM travels";
   $result=mysqli_query($conn,$query);
   while($res=mysqli_fetch_array($result)){
  ?>
  <tbody>
    <tr>
      <td><?php echo $res['user']?></td>
      <td><?php echo $res['date']?></td>
      <td><?php echo $res['travelm']?></td>
      <td><?php echo $res['source']?></td>
      <td><?php echo $res['destination']?></td>
      <td><?php echo $res['price']?></td>
      <td><a href="tdelete.php?user=<?php echo $res['user']?>"><input type="button" class="btn-btn-success" value="Delete"> </a></td>
      <td><a href="tupdate.php?user=<?php echo $res['user']?>"><input type="button" class="btn-btn-success" value="Update"> </a></td> 
    </tr>
  </tbody>
  <?php }
  ?>
</table>

            </div>
         </div>
    </div>


</body>

</html>