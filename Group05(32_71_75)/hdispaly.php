<!doctype html>
<html lang="en">
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

   <div class="container">
         <div class="row">
            <div class="col-lg-12">
           
            <table class="table">
  <thead>
    <tr>
      <th scope="col">user</th>
      <th scope="col">hname</th>
      <th scope="col">person</th>
      <th scope="col">cdate</th>
      <th scope="col">odate</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <?php 
  include 'connection.php';
   $query="SELECT * FROM hotels";
   $result=mysqli_query($conn,$query);
   while($res=mysqli_fetch_array($result)){
  ?>
  <tbody>
    <tr>
      <td><?php echo $res['user']?></td>
      <td><?php echo $res['hname']?></td>
      <td><?php echo $res['person']?></td>
      <td><?php echo $res['cdate']?></td>
      <td><?php echo $res['odate']?></td>
      <td><a href="hdelete.php?user=<?php echo $res['user']?>"><input type="button" class="btn-btn-success" value="Delete"> </a></td>
      <td><a href="hupdate.php?user=<?php echo $res['user']?>"><input type="button" class="btn-btn-success" value="Update"> </a></td> 
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