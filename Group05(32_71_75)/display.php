<?php
include("connection.php");
error_reporting(0);
  $query="select * from hotels";
  $data=mysqli_query($conn,$query);
  $total=mysqli_num_rows($data);


  if($total!=0){
      ?>
      <table>
      <tr><th>user</th>
      <th>hname</th>
      <th>person</th>
      <th>cdate</th>
      <th>odate</th>
      </tr>
      </table>
      <?php 
    while($result=mysqli_fetch_assoc($data)){

        echo "<tr>
          <td>".$result['user']."</td>
          <td>".$result['hname']."</td>
          <td>".$result['person']."</td>
          <td>".$result['cdate']."</td>
          <td>".$result['odate']."</td>
        </tr>"."<br>";
    }
   
  }
  else
    echo "No record found";
   
?>