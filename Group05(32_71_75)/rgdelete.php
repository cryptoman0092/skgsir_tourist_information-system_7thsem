<?php
 include 'connection.php';
 extract($_GET);
 $query="DELETE FROM register WHERE EMail='$EMail' ";
  mysqli_query($conn,$query);
  header('location:rgdisplay.php');
?>