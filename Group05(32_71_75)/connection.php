
<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "registration";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    ?>
    <script>alert(connection successful);
    </script>
    <?php
}
else{
    die("connection failed because".mysqli_connect_error());
}
?>