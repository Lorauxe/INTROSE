<?php

		$SERVERNAME = "localhost";
		$USERNAME = "root";
		$PASSWORD = "1234";
		$DATABASE = "attendance";
		 
		// Create connection
		$conn = new mysqli( $SERVERNAME,$USERNAME, $PASSWORD, $DATABASE);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}else{
			//echo 'Connected Successfully';
		}
		
		if(isset($_POST["uname"]) && isset($_POST["pword"])){
			
			$sql1 = "	select encoder_id, password
						from encoder
						where encoder_id = '" .  $_POST["uname"] . "' and  '" . $_POST["pword"] . "' = password;";

			
			$result = $conn->query($sql1);
				

			
			if ($result->num_rows == 0) {
				echo "Error! Not Valid ID or Password";
			} else {
				header("Location: http://localhost/INTROSE/success.php");
				exit;
			}
		}
					
		
?>


<html>
	<head> 
	</head>
	
	<body>
	
	<form action="login.php" method="post">
	Username: <input type="text" name="uname"><br>
	Password: <input type="text" name="pword"><br>
	<input type="submit">
	</form>
	
	
	
	</body>
</html>

