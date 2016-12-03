<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>FAMS2.0</title>

	<!-- IMPORTANT -->
	<script src = "jquery-3.0.0.js"></script>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<link type="text/css" rel="stylesheet" href="shop-item.css"/>
	<link type="text/css" rel="stylesheet" href="css/nav-bar.css"/>
	
	<script src="js/bootstrap.min.js"></script>
		
	<style>
	body{ 
		margin-top:0px;
	}
	.nav-tabs .glyphicon:not(.no-margin) { 
		margin-right:10px; 
	}
	.tab-pane .list-group-item:first-child {
		border-top-right-radius: 0px;
		border-top-left-radius: 0px;
	}
	.tab-pane .list-group-item:last-child {
		border-bottom-right-radius: 0px;
		border-bottom-left-radius: 0px;
	}
	.tab-pane .list-group .checkbox { 
		display: inline-block;
		margin: 0px; 
	}
	.tab-pane .list-group input[type="checkbox"]{ 
		margin-top: 2px; 
	}
	.tab-pane .list-group .glyphicon { 
		margin-right:5px; 
	}
	.tab-pane .list-group .glyphicon:hover { 
		color:#FFBC00; 
	}
	a.list-group-item.read { 
		color: #222;
		background-color: #F3F3F3; 
	}
	hr { 
		margin-top: 5px;
		margin-bottom: 10px; 
	}
	.nav-pills>li>a {
		padding: 5px 10px;
	}
	.ad { 
		padding: 5px;
		background: #F5F5F5;
		color: #222;
		font-size: 80%;
		border: 1px solid #E5E5E5; 
	}
	.ad a.title {
		color: #15C;
		text-decoration: none;
		font-weight: bold;
		font-size: 110%;
	}
	.ad a.url {
		color: #093;
		text-decoration: none;
	}
	#inbox: hover{
		background-color: #D3d3d3;
	}
	#inbox{
		background-color: white;
	}
	</style>
</head>
	
<body>
	<!-- NAVIGATION BAR -->
		<nav class="navbar navbar-custom">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand navItem" id="logo" href="Admin_Home.html">FAMS2.0</a>
			</div>
			<ul class="nav navbar-nav">
			  <li class="dropdown">
				<a class="dropdown-toggle navItem" data-toggle="dropdown" href="#">
					<span class="glyphicon glyphicon-book"></span> Faculty Plantilla
					<span class="caret"></span>
				</a>
			  </li>
			  <li>
				<a class="navItem" href="records.php"><span class="glyphicon glyphicon-time"></span>  General Records</a>
			  </li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li class="dropdown">
				<a class="dropdown-toggle navItem" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-calendar"></span>   Year
				<span class="caret"></span></a>
				<ul class="dropdown-menu" id="yearList">
				  <li><a href="#">2015-2016</a></li>
				  <li><a href="#">2016-2017</a></li>
				  <li><a href="#">"insert other year"</a></li>
				</ul>
			  </li>
			  <li class="dropdown">
				<a class="dropdown-toggle navItem" data-toggle="dropdown" href="#">Term
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="#">Term 1</a></li>
				  <li><a href="#">Term 2</a></li>
				  <li><a href="#">Term 3</a></li>
				</ul>
			  </li>
			  <li><a class="navItem" href="#"><span class="glyphicon glyphicon-user"></span> Help</a></li>
			  <li><a class="navItem"href="#"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
			</ul>
		  </div>
		</nav>
	<!-- END OF NAVIGATION BAR -->	
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Faculty Feedback</h1>
				</div>
			</div>
		</div>
		
		
		<div class="container-fluid">
			<div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                        <a href="#" id="inbox" class="list-group-item">
                            <span class="name">Status:	</span><span class="name" style="min-width: 120px;
                                display: inline-block; color:red; "> Denied</span> <span class="">Nice work on the lastest version</span>
                            <span class="text-muted" style="font-size: 11px;">- More content here</span> <span class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                </span></span></a>
                            <a href="#" id="inbox" class="list-group-item">        
                                    <span class="name">Status: 	</span><span class="name" style="min-width: 120px;
                                        display: inline-block; color:green;">Accepted </span> <span class="">This is big title</span>
                                    <span class="text-muted" style="font-size: 11px;">- I saw that you had..</span> <span class="badge">12:09 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                        </span></span></a>
                            <a href="#" id="inbox" class="list-group-item read">
                                            <span class="name">Status: 	</span><span class="name" style="min-width: 120px;
                                                display: inline-block; color:green;">Accepted</span> <span class="">This is big title</span>
                                            <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span class="badge">11:30 PM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                                </span></span></a>
                    </div>
                </div>
        </div>
		
</body>
</html>