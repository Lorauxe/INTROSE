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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		$(".dropdown-menu li a").click(function(){
		  var selText = $(this).text();
		  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+'<span class="caret"></span>');
		});
	});
	</script>
</head>
<style>
	#main{
		margin-left: 10%;
		margin-right: 10%;
	}
	
	#add, #addE{
		background-color: #1F858F;
		color: white;
	}
	#table_f{
		background-color: #A5A5AF;
		color: white;
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
		</br></br></br>
		<div id="main" class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 id="phead" class="page-header">Faculty Plantilla</h1>
				</div>
			</div>
		</div>
	<!-- END OF HEADER -->
	<!-- ADD AND EDIT BAR -->
		<div id="main" class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
					  <div class="container-fluid">
						<button id="add" type="button" class="btn btn-default btn-sml" data-toggle="modal" data-target="#addTYearForm"><span class="glyphicon glyphicon-plus"></span>    Add New Year and Term</button>
						<div id="addTYearForm" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Add Year and Term</h4>
								  </div>
								  <div class="modal-body">
									<!-- start of New Year and Term -->
									<form class="container" id="A_REC" action="<?php ?>" method="POST">
									  <div class="form-group">
										<label>Term no.:</label>
										<div class="row">
											<div class="col-lg-2">
												<select class="form-control" id="day2">
													<option>Term 1</option>
													<option>Term 2</option>
													<option>Term 3</option>
												</select>
											</div>
										</div>
									  </div>
									  <div class="form-group">
										<label>Academic Year:</label>
										<div class="row">
											<div class="col-lg-2"><input class="form-control" id="from_year"></div>
											<div class="col-lg-2"><input class="form-control" id="to_year"></div>
										</div>
									  </div>
									</form>
									<!-- end of New Year and Term -->
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-default">Submit</button>
								  </div>
								</div>
							</div>
						</div>
						<button id="add" type="button" class="btn btn-default btn-sml" data-toggle="modal" data-target="#addFacultyForm"><span class="glyphicon glyphicon-plus"></span>    Add Faculty</button>
						<div id="addFacultyForm" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Add Faculty</h4>
								  </div>
								  <div class="modal-body">
									<form class="container">
									  <div class="form-group">
										<label>Name:</label>
										<div class="row"><div class="col-lg-5"><input class="form-control" id="name"></div></div>
									  </div>
									  <div class="form-group">
										<label>ID Number:</label>
										<div class="row"><div class="col-lg-5"><input class="form-control" id="idnum"></div></div>
									  </div>
									  <div class="form-group">
										<label>Department:</label>
										<div class="row"><div class="col-lg-5"><input class="form-control" id="dep"></div></div>
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
						<button id="add" type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#addClassForm"><span class="glyphicon glyphicon-plus"></span>    Add Class</button>
						<div id="addClassForm" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Add Class</h4>
								  </div>
								  <div class="modal-body">
									<form class="container">
									  <div class="form-group">
										<label>Department:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" id="dep"></div></div>
									  </div>
									  <div class="form-group">
										<label>Building/ Room no.:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" id="locale"></div></div>
									  </div>
									  <div class="form-group">
										<label>Faculty ID:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" id="fac_id"></div></div>
									  </div>
									  <div class="form-group">
										<label>Course Code:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" id="course"></div></div>
									  </div>
									  <div class="form-group">
										<label>Section:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" id="section"></div></div>
									  </div>
									  <div class="form-group">
										<div class="row">
											<label class="col-lg-2">Day</label>
											<label class="col-lg-2">Time Start</label>
											<label class="col-lg-2">Time End</label>
										</div>
										<div class="row">
											<div class="col-lg-2">
												<select class="form-control" id="day1">
													<option>M - Monday</option>
													<option>T - Tuesday</option>
													<option>W - Wednesday</option>
													<option>H - Thursday</option>
													<option>F - Friday</option>
													<option>S - Saturday</option>
													<option selected>--NONE--</option>
												</select>
											</div>
											<div class="col-lg-2">
												<input type="time" class="form-control" id="s_time1">
											</div>
											<div class="col-lg-2">
												<input type="time" class="form-control" id="e_time1">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-2">
												<select class="form-control" id="day2">
													<option>M - Monday</option>
													<option>T - Tuesday</option>
													<option>W - Wednesday</option>
													<option>H - Thursday</option>
													<option>F - Friday</option>
													<option>S - Saturday</option>
													<option selected>--NONE--</option>
												</select>
											</div>
											<div class="col-lg-2">
												<input type="time" class="form-control" id="s_time2">
											</div>
											<div class="col-lg-2">
												<input type="time" class="form-control" id="e_time2">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-2">
												<select class="form-control" id="day3">
													<option>M - Monday</option>
													<option>T - Tuesday</option>
													<option>W - Wednesday</option>
													<option>H - Thursday</option>
													<option>F - Friday</option>
													<option>S - Saturday</option>
													<option selected>--NONE--</option>
												</select>
											</div>
											<div class="col-lg-2">
												<input type="time" class="form-control" id="s_time3">
											</div>
											<div class="col-lg-2">
												<input type="time" class="form-control" id="e_time3">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-2">
												<select class="form-control" id="day4">
													<option>M - Monday</option>
													<option>T - Tuesday</option>
													<option>W - Wednesday</option>
													<option>H - Thursday</option>
													<option>F - Friday</option>
													<option>S - Saturday</option>
													<option selected>--NONE--</option>
												</select>
											</div>
											<div class="col-lg-2">
												<input type="time" class="form-control" id="s_time4">
											</div>
											<div class="col-lg-2">
												<input type="time" class="form-control" id="e_time4">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-2">
												<select class="form-control" id="day5">
													<option>M - Monday</option>
													<option>T - Tuesday</option>
													<option>W - Wednesday</option>
													<option>H - Thursday</option>
													<option>F - Friday</option>
													<option>S - Saturday</option>
													<option selected>--NONE--</option>
												</select>
											</div>
											<div class="col-lg-2">
												<input type="time" class="form-control" id="s_time5">
											</div>
											<div class="col-lg-2">
												<input type="time" class="form-control" id="e_time5">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-2">
												<select class="form-control" id="day6">
													<option>M - Monday</option>
													<option>T - Tuesday</option>
													<option>W - Wednesday</option>
													<option>H - Thursday</option>
													<option>F - Friday</option>
													<option>S - Saturday</option>
													<option selected>--NONE--</option>
												</select>
											</div>
											<div class="col-lg-2">
												<input type="time" class="form-control" id="s_time6">
											</div>
											<div class="col-lg-2">
												<input type="time" class="form-control" id="e_time6">
											</div>
										</div>
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
						<button id="addE" type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#editClassForm"><span class="glyphicon glyphicon-pencil"></span>    Edit Class</button>
						<ul class="nav navbar-nav navbar-right">
							<form class="container-fluid" style="padding-top:5%;">
								<div class="btn-group">
								  <a class="btn dropdown-toggle btn-select" data-toggle="dropdown" href="#">Year <span class="caret"></span></a>
								  <ul class="dropdown-menu">
									<li><a href="#">2014-2015</a></li>
									<li><a href="#">2015-2016</a></li>
									<li><a href="#">2016-2017</a></li>
									<li><a href="#">Other</a></li>
								  </ul>
								</div>
								
								<div class="btn-group">
								  <a class="btn dropdown-toggle btn-select2" data-toggle="dropdown" href="#">Term <span class="caret"></span></a>
								  <ul class="dropdown-menu">
									<li><a href="#">Term 1</a></li>
									<li><a href="#">Term 2</a></li>
									<li><a href="#">Term 3</a></li>
								  </ul>
								</div>
							</form>
						</ul>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<!-- END OF ADD AND EDIT BAR -->
		<!-- SEARCH BAR -->
		<div id="main" class="container-fluid">
			<div class="row">
				<div class="col-lg-9">
					<div id="imaginary_container"> 
						<div class="input-group stylish-input-group">
							<input type="text" class="form-control"  placeholder="Search" >
							<span class="input-group-addon">
								<button type="submit">
									<span class="glyphicon glyphicon-search"></span>
								</button>  
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<select class="form-control" id="sel1">
						<option>Id number</option>
						<option>Class/ Section</option>
					</select>
				</div>
			</div>
		</div>
		<!-- END OF SEARCH BAR -->
		<!-- TABLE -->
		<div id="main" class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<h4 class="col-lg-2">Name: </h4><h4 class="col-lg-3">Ryan Dimaunahan</h4>
							</div>
							<div class="row">
								<h4 class="col-lg-2">ID: </h4><h4 class="col-lg-3">123456</h4>
							</div>
							<div class="row">
								<h4 class="col-lg-2">Department: </h4><h4 class="col-lg-3">Software Technology</h4>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead>
								  <tr>
									  <th data-field="id">Course</th>
									  <th data-field="name">Section</th>
									  <th data-field="units">Units</th>
									  <th data-field="day1">Day1;Time</th>
									  <th data-field="room1">Room1</th>
									  <th data-field="day2">Day2;Time</th>
									  <th data-field="room2">Room2</th>
									  <th data-field="day3">Day3;Time</th>
									  <th data-field="room3">Room3</th>
									  <th data-field="day4">Day4;Time</th>
									  <th data-field="room4">Room4</th>
									  <th data-field="type">Type</th>
								  </tr>
								</thead>
							</table>
						</div>
					</div>
					<button id="table_f" type="button" class="btn btn-default navbar-btn">Previous</button>
					<button id="table_f" type="button" class="btn btn-default navbar-btn">  Next  </button>
					<button id="table_f" type="button" class="btn btn-default navbar-btn"> Delete </button>
				</div>
			</div>
		</div>
		<!-- END OF TABLE -->
		
</body>
</html>