<?php
		session_start();
		
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
		if(isset($_SESSION["UNAME"]) && isset($_SESSION["PWORD"])){
				header("Location: http://localhost/FAMS");
				exit;
		}
		if(isset($_POST["uname"]) && isset($_POST["pword"])){
			
			$sql1 = "	select checker_id, password
						from checker
						where checker_id = '" .  $_POST["uname"] . "' and  '" . $_POST["pword"] . "' = password;";

			
			$result = $conn->query($sql1);
				

			
			if ($result->num_rows == 0) {
				$GLOBALS["err"] = "Error! Not Valid ID or Password";
			}else{
				$_SESSION["UNAME"] = $_POST["uname"];
				$_SESSION["PWORD"] = $_POST["pword"];
				
				header("Location: http://localhost/FAMS/home2.php");
				exit;
			}
		}
					
		
?>



<html>
	<head>
		<style type = "text/css">
			body{
				overflow: hidden;
				background:url('famspics/2.jpg') fixed;
				background-color: #fff;
				background-position: 5% 5%;
				background-size: 120% auto;
			}
			
			#bodeh{
				position: absolute;
				left: 37.5%;
				top: 25%;
				height: 50%;
				width: 25%;
				background-color: #111;
				opacity: .9;	
				border-radius: 10px;
				
			}
			
			#fcontent{
				position: absolute;
				left: 37.5%;
				top: 25%;
				height: 50%;
				width: 25%;	
				
			}
			
			@font-face {
				font-family: FUTURA;
				src: url(FUTURAN.ttf);
			}
			
			form {
				position: relative;
				left: 20%;
				top: 10%;
				color: #fff;
				font-family: FUTURA;
			}
			
			@font-face {
				font-family: MINION;
				src: url(MinionPro-Regular.otf);
			}
			
			.ins {
				font-family: FUTURA;
				color: #202020;
				width:  60%;
				height: 10%;
				border: 1px solid #d0d0d0;
				border-radius: 5px;
			}
			
			#logg{
				font-size: 15px;
				width: 20%;
				height: 10%;
				color:white;
				background-color: #2e8b57;
				border: none;
			}
			#cc{
				position: relative;
				font-family: FUTURA;
				padding-left:10%;
				padding-right:10%;
				color: white;
				font-size: 13px;
			}
			
			#error {
				position:relative;
				left: 2%;
				color: #ff0033;
				font-size: 12px;
			}
			
		</style>
	</head>
	
	<body>
	<div id = "bodeh">

	
	</div>
	
	<div id ="fcontent">
		
		<form action="login.php" method="post">
			<span id = "uid">
				User ID<br>
				<input class = "ins" type="text" name="uname"><br><br>
			</span>
			<span id = "pwd">
				Password<br>
				<input class = "ins" type="text" name="pword"><br><br><br>
			</span>
				<input type="submit" value = "Login" id = "logg">
				<?PHP
					if(isset($GLOBALS["err"]))
						echo '<span id = "error"> ' . $GLOBALS["err"] . ' </span>'; 
				?>
				<br><br>
				
 		</form>
		<center><br>
				<p id = "cc"> Copyright©2016 All Rights Reserved. INTROSE All-Stars </p>
		</center>
	</div>
	
	</body>
</html>

