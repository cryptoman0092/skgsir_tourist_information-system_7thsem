<?php
 include 'connection.php';
 extract($_GET);
 $query="DELETE FROM hotels WHERE user='$user' ";
  mysqli_query($conn,$query);
  header('location:hdispaly.php');
?>