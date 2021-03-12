<?php
 include 'connection.php';
 extract($_GET);
 $query="DELETE FROM travels WHERE user='$user' ";
  mysqli_query($conn,$query);
  header('location:tdisplay.php');
?>