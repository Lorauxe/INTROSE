

<html>
	<head>
		<style type = "text/css">
			body{
				overflow: hidden;
				background:url('../../assets/bgs/2.jpg') fixed;
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
				src: url(../../assets/fonts/FUTURAN.TTF);
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
				src: url(../../assets/fonts/MinionPro-Regular.otf);
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
		
		<form action="<?php echo base_url('index.php/login/validate'); ?>" method="post">
			<span id = "uid">
				User ID<br>
				<input class = "ins" type="text" name="uname"><br><br>
			</span>
			<span id = "pwd">
				Password<br>
				<input class = "ins" type="password" name="pword"><br><br><br>
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

