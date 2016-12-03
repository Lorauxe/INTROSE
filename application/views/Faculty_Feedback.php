<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>FAMS 2.0</title>

	<!-- IMPORTANT -->
	<script src = "jquery-3.0.0.js"></script>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<link type="text/javascript" href="js/bootstrap.min.js"/>
	<link type="text/css" rel="stylesheet" href="shop-item.css"/>
	<link type="text/css" rel="stylesheet" href="css/nav-bar.css"/>
	<link type="text/css" rel="stylesheet" href="css/message-tab.css"/>
	<link type="text/css" rel="stylesheet" href="css/main-tab.css"/>
</head>
<style>

	#main{
		margin-left: 10%;
		margin-right: 10%;
	}
</style>
<body>
	<!-- NAVIGATION BAR -->
	<nav id="navbar" class="navbar bar-inverse navbar-fixed-top"">
	  <div id="navbar" class="container-fluid">
		<div id="navbar" class="navbar-header">
		  <a id="navItem" class="navbar-brand navItem" id="logo" href="Admin_Home.php">FAMS2.0</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a id="navItem" class="navItem" href="Faculty_Plantilla.php">Faculty Plantilla</a></li>
			<li><a id="navItem" class="navItem" href="General_Records.php">General Records</a></li>
			<li><a id="navItem" class="navItem" href="Faculty_Feedback.php">Faculty Feedback</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			  <li><a id="navItem" class="navItem" href="#"><span class="glyphicon glyphicon-user"></span> Help</a></li>
			  <li><a id="navItem" class="navItem"href="#"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
			</ul>
		  </div>
		</nav>
	<!-- END OF NAVIGATION BAR -->	
	
	<!-- HEADER -->
		<div id="main" class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 id="phead" class="page-header">Faculty Feedback</h1>
				</div>
			</div>
		</div>
	<!-- END OF HEADER -->
	
	<!-- INBOX -->
		<div id="main" class="container-fluid">
			<div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                    	<!-- FIRST MESSAGE ENTRY -->
                        <a href="#" id="inbox" class="list-group-item" data-toggle="modal" data-target="#viewFacultyFeedback">
                            <span class="name">Status:	</span>
                            <span id="msgStatus" class="name"> Pending</span> <span class="">Nice work on the latest version</span>
                            <span class="text-muted" style="font-size: 11px;">- More content here</span>
                        </a>
                        <!-- END OF FIRST MESSAGE ENTRY -->
                        <!-- MESSAGE MODAL -->
                        <div id="viewFacultyFeedback" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Message</h4>
								  	</div>
								 	<div class="modal-body">
										<form class="container">
									  		<div class="form-group">
												<label>Name:	Dimaunahan, Ryan Samuel</label>
												<label>ID:		9712345</label>
									  		</div>
									  		<div class="form-group">
												<label>Concern:</label>
												<label>I was not absent.</label>
									  		</div>
										</form>
								  	</div>
									<div class="modal-footer">
								  		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-default">Submit</button>
								  	</div>
								</div>
							</div>
						</div>
						<!-- END OF MESSAGE MODAL -->
                        <a href="#" id="inbox" class="list-group-item">        
                            <span class="name">Status: 	</span>
                            <span id="msgStatus" class="name"> Pending</span> <span class="">This is big title</span>
                            <span class="text-muted" style="font-size: 11px;">- I saw that you had..</span></a>
                        <a href="#" id="inbox" class="list-group-item read">
                            <span class="name">Status: 	</span>
                            <span id="msgStatus" class="name"> Pending</span> <span class="">This is big title</span>
                            <span class="text-muted" style="font-size: 11px;">- Hi, hello how r u ?</span></a>
                    </div>
                </div>
        	</div>
        </div>
     <!-- END OF INBOX -->
</body>
</html>