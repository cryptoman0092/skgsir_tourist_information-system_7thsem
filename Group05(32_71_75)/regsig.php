<?php
include 'connection.php';
error_reporting(0);
if(count($_POST)!=0){
    extract($_POST);
    $query="INSERT INTO register (Name,Address,EMail,Password,Telephone) 
	values('$Name','$Address','$EMail','$Password','$Telephone') ";
     $result=mysqli_query($conn,$query);
     if($result==true){
         echo "result recorded successfully";
     }
     else{
         echo "failed";
     }
}
?>

<html> 
	<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous">
		<script> 
			function validation() { 
				var name = 
					document.forms["RegForm"]["Name"]; 
				var email = 
					document.forms["RegForm"]["EMail"]; 
				var phone = 
					document.forms["RegForm"]["Telephone"]; 
				
				var password = 
					document.forms["RegForm"]["Password"]; 
				var address = 
					document.forms["RegForm"]["Address"]; 

				if (name.value == "") { 
					window.alert("Please enter your name."); 
					name.focus(); 
					return false; 
				} 

				if (address.value == "") { 
					window.alert("Please enter your address."); 
					address.focus(); 
					return false; 
				} 

				if (email.value == "") { 
					window.alert( 
					"Please enter a valid e-mail address."); 
					email.focus(); 
					return false; 
				} 

				if (phone.value == "") { 
					window.alert( 
					"Please enter your telephone number."); 
					phone.focus(); 
					return false; 
				} 

				if (password.value == "") { 
					window.alert("Please enter your password"); 
					password.focus(); 
					return false; 
				} 


				return true; 
			} 
		</script> 

		<style> 
       body{
           background-image:url(sig/cs7.jpg);
           background-color:#cccccc;
       }
			div { 
				box-sizing: border-box; 
				width: 100%; 
				border: 100px solid black; 
				float: left; 
				align-content: center; 
				align-items: center; 
			} 

			form { 
				margin: 0 auto; 
				width: 600px; 
			} 
           </style> 
	</head> 

	<body> 
    <br>
		<h1 style="text-align: center;">REGISTRATION FORM</h1><br><br> 
		<form name="RegForm" action=""
			onsubmit="return validation()" method="POST"> 
			<p>Name: <input type="text"
							size="65" name="Name" value="" /></p> 
			<br /> 
			<p>Address: <input type="text"
							size="65" name="Address"  value="" /> 
		</p> 
			<br /> 
			<p>E-mail: <input type="text"
							size="65" name="EMail" value=""/></p> 
			<br /> 
			<p>Password: <input type="text"
						size="65" name="Password" value="" /></p> 
			<br /> 
			<p>Mobile: <input type="text"
						size="65" name="Telephone" value="" /></p> 
			<br /> 
              <p class="style=text-align:right;">
				<input type="submit"
					value="submit" name="Submit"  />

				<input type="reset"
					value="Reset" name="Reset"  /> 
        </p>
		</form> 
          <p style="text-align:center;"><b class="text-danger">Already Registered? </b><a href="signin.php"><b class="text-success">
              signin</b></a></p>   

             <!--php code for storing data-->
          
            <!--end of php-->
	</body> 
</html> 


