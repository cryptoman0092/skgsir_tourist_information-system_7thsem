<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <title>registration form</title>
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
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">EMail</th>
      <th scope="col">Password</th>
      <th scope="col">Telephone</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <?php 
  include 'connection.php';
   $query="SELECT * FROM register";
   $result=mysqli_query($conn,$query);
   while($res=mysqli_fetch_array($result)){
  ?>
  <tbody>
    <tr>
      <td><?php echo $res['Name']?></td>
      <td><?php echo $res['Address']?></td>
      <td><?php echo $res['EMail']?></td>
      <td><?php echo $res['Password']?></td>
      <td><?php echo $res['Telephone']?></td>
      <td><a href="rgdelete.php?user=<?php echo $res['EMail']?>"><input type="button" class="btn-btn-success" value="Delete"> </a></td>
      <td><a href="rgupdate.php?user=<?php echo $res['EMail']?>"><input type="button" class="btn-btn-success" value="Update"> </a></td> 
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