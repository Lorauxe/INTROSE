<!-- NOTE: WELCOME PAGE - AFTER LOGIN -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>FAMS 2.0</title>

	<!-- IMPORTANT -->
	<script src = "jquery-3.0.0.js"></script>
	<link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.css"/>
	<script src="../assets/js/bootstrap.min.js"></script>
	<link type="text/css" rel="stylesheet" href="shop-item.css"/>
	<link type="text/css" rel="stylesheet" href="../css/nav-bar.css"/>
</head>
<style>
	<!-- FOR TYPING EFFECT -->
	html{
  		min-height: 100%;
  		overflow: hidden;
	}

	body{
  		height: calc(100vh - 8em);
  		padding: 4em;
  		color: green; 
 	 	background-color: white;  
	}

	.line-1{
    	position: relative;
    	top: 50%;  
    	width: 18em;
    	margin: 0 auto;
    	border-right: 2px solid rgba(255,255,255,.75);
    	font-size: 180%;
    	text-align: center;
    	white-space: nowrap;
    	overflow: hidden;
    	transform: translateY(-50%); 
    	font-family: Arial, monospace;    
	}

	/* Animation */
	.anim-typewriter{
  		animation: typewriter 5s steps(44) 1s 1 normal both,
        	       blinkTextCursor 500ms steps(44) infinite normal;
	}
	@keyframes typewriter{
  		from{width: 0;}
  		to{width: 24em;}
	}
	@keyframes blinkTextCursor{
  		from{border-right-color: green;}
  		to{border-right-color: white;}
	}
	
  	<!-- MAIN -->
  	#main{
  		align: center;
  	}
  	#SetA{
  		margin-left: 22%;
  	}
  	#SetB{
  		margin-left: 22%;
  		margin-top: 2%;
  	}
  	#img{
  		margin-left: 15px;
  	}
  	#instruct{
  		margin-left: 10%;
  		margin-top: 5%;
  	}
</style>
<body>
	<!-- NAVIGATION BAR -->
	<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
      <div id="navbar" class="container-fluid">
        <div id="navbar" class="navbar-header">
          <a class="navbar-brand" href="Admin_Home.php" style="color: white;">FAMS 2.0</a>
        </div>
		<ul class="nav navbar-nav navbar-right">
			  <li><a id="navItem" class="navItem" href="#"><span class="glyphicon glyphicon-user"></span> Help</a></li>
			  <li><a id="navItem" class="navItem" href="<?PHP echo base_url('index.php/login/logout') ?>"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
		</ul>
      </div>
    </nav>
 	<!-- END OF NAVIGATION BAR -->
 	   
	<!-- HEADER -->
	<div id="header">
		<br><br>
		<p class="line-1 anim-typewriter" style="margin-top: 2%;">Hi, I am FAMS 2.0! What would you like to do today? </p>	
	</div>
	<!-- END OF HEADER -->
	
	<!-- CHOICES -->
	<div id="main">
		<p id="instruct" class="line-1">Choose a button below:</p>
		<!-- FIRST ROW OF CHOICES -->
		<div id="SetA">
			<a href="<?PHP echo base_url('index.php/c_genrec/start'); ?>"><input type="image" id="img" src="../assets/bgs/choice1.png"/></a>
			<a href="<?PHP echo base_url('index.php/c_genrec/start'); ?>"><input type="image" id="img" src="../assets/bgs/choice2.png"/></a>
			<a href="Faculty_Plantilla.php"><input type="image" id="img" src="../assets/bgs/choice3.png"/></a><br>
		</div>
		<!-- SECOND ROW OF CHOICES -->
		<div id="SetB">
			<a href="Faculty_Plantilla.php"><input type="image" id="img" src="../assets/bgs/choice4.png"/></a>
			<a href="Faculty_Feedback.php"><input type="image" id="img" style="margin-left: 28px;" src="../assets/bgs/choice5.png"/></a>
			<input type="image" style="margin-left: 60px;" id="img" src="../assets/bgs/choice6.png"/>
		</div>
	</div>
	<!-- END OF CHOICES -->
</body>
</html>