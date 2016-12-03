<html lang="en">
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
			$("#editFI").click(function(){
				if($(this).prop("checked") == true)
					$('#editFacID').prop('disabled',false);
				else
					$('#editFacID').prop('disabled',true);
			});
			$("#editCC").click(function(){
				if($(this).prop("checked") == true)
					$('#editCourse').prop('disabled',false);
				else
					$('#editCourse').prop('disabled',true);
			});
			$("#editSEC").click(function(){
				if($(this).prop("checked") == true)
					$('#editSection').prop('disabled',false);
				else
					$('#editSection').prop('disabled',true);
			});
			$("#editREM").click(function(){
				if($(this).prop("checked") == true)
					$('#editRemark').prop('disabled',false);
				else
					$('#editRemark').prop('disabled',true);
			});
			$("#editCKR").click(function(){
				if($(this).prop("checked") == true)
					$('#editChkrID').prop('disabled',false);
				else
					$('#editChkrID').prop('disabled',true);
			});
		});
		</script>
		<script>
		$(document).ready(function() {
			var date = new Date();

			var day = date.getDate();
			var month = date.getMonth() + 1;
			var year = date.getFullYear();

			if (month < 10) month = "0" + month;
			if (day < 10) day = "0" + day;

			var today = year + "-" + month + "-" + day;       
			$("#makeupDateEncoded").attr("value", today);
		});
		</script>
		<script>
		$(document).ready(function() {
			var date = new Date();

			var day = date.getDate();
			var month = date.getMonth() + 1;
			var year = date.getFullYear();

			if (month < 10) month = "0" + month;
			if (day < 10) day = "0" + day;

			var today = year + "-" + month + "-" + day;       
			$("#setTime").attr("value", today);
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
		.stylish-input-group .input-group-addon{
		background: white; 
	}
	.stylish-input-group .form-control{
		border-right:0; 
		box-shadow:0 0 0; 
		border-color:#ccc;
	}
	.stylish-input-group button{
		border:0;
		background:transparent;
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
		
		</br></br></br>
		<div id="main" class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 id="phead" class="page-header">General Records</h1>
				</div>
			</div>
		</div>

		<div id="main" class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
					  <div class="container-fluid">
						<button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#addReportForm"><span class="glyphicon glyphicon-plus"></span>    Add Daily Report</button>
						<!-- start of modal for Add Report -->
						<div id="addReportForm" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Add Daily Record</h4>
								  </div>
								  <div class="modal-body">
									<!-- start of form for Add Report -->
									<form class="container" id="A_REC" action="<?php ?>" method="POST">
									  <div class="form-group">
										<label>Faculty ID:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" name="a_id_no" id="facID"></div></div>
									  </div>
									  <div class="form-group">
										<label>Course Code:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" name="a_crse_co" id="course"></div></div>
									  </div>
									  <div class="form-group">
										<label>Section:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" name="a_sec_id" id="section"></div></div>
									  </div>
									  <div class="row">
										<div class="col-lg-1">
											<div class="form-group">
												<label>Day:</label>
												<div class="row"><div class="col-lg-12"><input class="form-control" name="a_day_wk" id="day" disabled></div></div>
											 </div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Time:</label>
												<div class="row"><div class="col-lg-6"><input class="form-control" name="a_time_dy" id="time" disabled></div></div>
											 </div>
										</div>
									  </div>
									  <div class="row">
										<div class="col-lg-3">
											<div class="form-group">
												<label>Room:</label>
												<div class="row"><div class="col-lg-12"><input class="form-control" name="a_rm_no" id="room" disabled></div></div>
											 </div>
										</div>
									  </div>
									  <div class="form-group">
										<label>Remarks:</label>
										<div class="row">
											<div class="col-lg-3">
												<select class="form-control" name="a_rmrk" id="remark">
													<option>AB - Absent</option>
													<option>LA - Late</option>
													<option>AB - Absent</option>
													<option>SB - Substitute</option>
													<option>SW - SeatWork</option>
													<option>VR - Vacant Room</option>
													<option>ED - Early Dismissal</option>
													<option>US - Unscheduled Class</option>
												</select>
											</div>
										</div>
									  </div>
									  <div class="form-group">
										<label>Checker:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" name="a_chkr_id" id="checkerID"></div></div>
									  </div>
									</form>
									<!-- end of Add Report -->
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" form="A_REC" class="btn btn-default" name="sub_add_frm">Submit</button>
								  </div>
								</div>
							</div>
						</div>
						<!-- end of modal for Add Report -->
						
						<button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#A_MU"><span class="glyphicon glyphicon-plus"></span>    Add Make-Up Class Report</button>
						<!-- start of modal for Add Make-up Class Report -->
						<div id="A_MU" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Add Make-Up Class Report</h4>
								  </div>
								  <div class="modal-body">
									<!-- start of form for Add Make-up Class Report -->
									<form class="container" id="A_MUREP" action="<?php ?>" method="POST">
									  <div class="form-group">
										<label>Reference No.:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" name="a_ref_no" id="refNum"></div></div>
									  </div>
									  <div class="form-group">
										<label>Reason of Absence:</label>
										<div class="row">
											<div class="col-lg-3">
												<select class="form-control" name="rsn_absnc" id="rsnAbsnc">
													<option>SI - Sickness</option>
													<option>PM - Personal Matters</option>
													<option>CF - Conference</option>
													<option>AC - Alternative Class</option>
													<option>FT - Field Trip</option>
													<option>OL - Online Class</option>
													<option>OB - Official Business</option>
												</select>
											</div>
										</div>
									  </div>
									  <div class="form-group">
										<label>Make-up Date:</label>
										<div class="row"><div class="col-lg-3"><input type="date" class="form-control" name="mkup_date" id="makeupDate"></div></div>
									  </div>
									  <div class="row container">
										<div class="col-lg-2">
											<div class="form-group">
												<label>Time Start:</label>
												<div class="row"><input type="time" class="form-control" name="mkup_strttme" id="makeupStartTime"></div>
											 </div>
										</div>
										<div class="col-lg-5">
											<div class="form-group">
												<label>Time End:</label>
												<div class="row"><div class="col-lg-6"><input type="time" class="form-control" name="mkup_endtme" id="makeupEndTime"></div></div>
											 </div>
										</div>
									  </div>
									  <div class="row">
										<div class="col-lg-3">
											<div class="form-group">
												<label>Room:</label>
												<div class="row"><div class="col-lg-12"><input class="form-control" name="mkup_rm_no" id="makeupRoom"></div></div>
											 </div>
										</div>
									  </div>
									  <div class="form-group">
										<label>Date Filed:</label>
										<div class="row"><div class="col-lg-3"><input type="date" class="form-control" name="mkup_filed_date" id="makeupDateFiled"></div></div>
									  </div>
									  <div class="form-group">
										<label>Date Encoded:</label>
										<div class="row"><div class="col-lg-3"><input type="date" class="form-control" name="mkup_encd_date" id="makeupDateEncoded" disabled></div></div>
									  </div>
									  <div class="form-group">
										<label>Checker:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" name="mkup_chkr_id" id="makeupCheckerID"></div></div>
									  </div>
									</form>
									<!-- end of Add Make-up Class Report -->
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" form="A_MU" class="btn btn-default" name="sub_add_frm">Submit</button>
								  </div>
								</div>
							</div>
						</div>
						<!-- end of modal for Add Make-up Class Report -->
						
						<button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#editReportForm"><span class="glyphicon glyphicon-pencil"></span>    Edit Daily Report</button>
						<!-- start of modal for Edit Report -->
							<!-- flow:
							1. input a valid reference id.
							2. the data of the reference id would be outputed at each of the appropriate text box.
							3. click the checkbox to set the textbox editable.
							4. or click the delete button to delete record.
							-->
						<div id="editReportForm" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Edit Daily Record</h4>
								  </div>
								  <div class="modal-body">
									<!-- start of form for Edit Report -->
									<form class="container" id="E_REC" action="<?php ?>" method="POST">
									  <div class="form-group">
										<label>Reference ID:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" ></div></div>
									  </div>
									  <div class="form-group">
										<label><input type="checkbox" id="editFI">   Faculty ID:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" name="e_id_no" id="editFacID" disabled></div></div>
									  </div>
									  <div class="form-group">
										<label><input type="checkbox" id="editCC">   Course Code:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" name="e_crse_co" id="editCourse" disabled></div></div>
									  </div>
									  <div class="form-group">
										<label><input type="checkbox" id="editSEC">   Section:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control"name="e_sec_id" id="editSection" disabled></div></div>
									  </div>
									  <div class="row">
										<div class="col-lg-1">
											<div class="form-group">
												<label>Day:</label>
												<div class="row"><div class="col-lg-12"><input class="form-control" name="e_day_wk" id="day" disabled></div></div>
											 </div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Time:</label> 
												<div class="row"><div class="col-lg-6"><input class="form-control" name="e_time_dy" id="time" disabled></div></div>
											 </div>
										</div>
									  </div>
									  <div class="row">
										<div class="col-lg-3">
											<div class="form-group">
												<label>Room:</label>
												<div class="row"><div class="col-lg-12"><input class="form-control" name="e_rm_no" id="room" disabled></div></div>
											 </div>
										</div>
									  </div>
									  <div class="form-group">
										<label><input type="checkbox" id="editREM">   Remarks:</label>
										<div class="row">
											<div class="col-lg-3">
												<select class="form-control" name="e_rmrk" id="editRemark" disabled>
													<option>AB - Absent</option>
													<option>LA - Late</option>
													<option>AB - Absent</option>
													<option>SB - Substitute</option>
													<option>SW - SeatWork</option>
													<option>VR - Vacant Room</option>
													<option>ED - Early Dismissal</option>
													<option>US - Unscheduled Class</option>
												</select>
											</div>
										</div>
									  </div>
									  <div class="form-group">
										<label><input type="checkbox" id="editCKR">   Checker:</label>
										<div class="row"><div class="col-lg-3"><input class="form-control" name="e_chkr_id" id="editChkrID" disabled></div></div>
									  </div>
									</form>
									<!-- end of Edit Report -->
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" form="E_REC" class="btn btn-default" name="sub_edt_frm">Submit</button>
									<button type="button" form="E_REC" class="btn btn-default" name="del_edt_frm">Delete</button>
								  </div>
								</div>
							</div>
						</div>
						<!-- end of modal for Edit Report -->
						
						<a href="General_Ledger.php" class="btn btn-primary navbar-btn" role="button"><span class="glyphicon glyphicon-list-alt"></span>    Open General Ledger</a>
						
						<!-- start of set date --><input type="date" name="set_date" id="setTime" style="width:20%; height:4.5%"><!-- end of set date -->
					  </div>
					</div>
				</div>
			</div>
		</div>
		</br></br>
		
		<!--Start of General Ledger -->
		<div id="main" class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<h4 class="col-lg-2">AY: </h4><h4 class="col-lg-3">{2016-2017}</h4>
							</div>
							<div class="row">
								<h4 class="col-lg-2">Term: </h4><h4 class="col-lg-3">{1}</h4>
							</div>
							<div class="row">
								<h4 class="col-lg-2">As of: </h4><h4 class="col-lg-3">{12/03/2016}</h4>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead>
								  <tr>
									  <th data-field="facultyName">Faculty Name</th>
									  <th data-field="load">Load</th>
									  <th data-field="CF">CF</th>
									  <th data-field="PM">PM</th>
									  <th data-field="SI">SI</th>
									  <th data-field="XX">XX</th>
									  <th data-field="totalAbsence">Total Absence</th>
									  <th data-field="makeupHours">Total Make-up Hours</th>
									  <th data-field="remainingMakeupHours">Absences Left</th>
									  <th data-field="OB">OB</th>
									  <th data-field="AC">AC</th>
									  <th data-field="FT">FT</th>
									  <th data-field="OL">OL</th>
									  <th data-field="SW">SW</th>
									  <th data-field="SB">SB</th>
									  <th data-field="LA">LA</th>
									  <th data-field="ED">ED</th>
								  </tr>
								</thead>
								<tbody>
									<td>Dimaunahan, Ryan</td>
									<td>12.0</td>
									<td>0</td>
									<td>0</td>
									<td>1.5</td>
									<td>0</td>
									<td>1.5</td>
									<td>0</td>
									<td>1.5</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of General Ledger -->
		
	</body>
</html>