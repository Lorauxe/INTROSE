<?php

		$SERVERNAME = "localhost";
		$USERNAME = "root";
		$PASSWORD = "1234";
		$DATABASE = "attendance";
		 
	
		
?>


<html>
	<head> 
	</head>
	
	<body>
	
		<form action="search.php" method="post">
			Faculty ID: <input type="text" name="fID"><br>
			Course Code: <input type="text" name="cCODE"><br>
			Section: <input type ="text" name="SECT"><br>	
			<input type="submit">
			
			
		</form>
	
<?PHP
				// Create connection
				$conn = new mysqli( $SERVERNAME,$USERNAME, $PASSWORD, $DATABASE);
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}else{
					//echo 'Connected Successfully';
				}
				
				if(isset($_POST["fID"]) && isset($_POST["cCODE"]) && isset($_POST["SECT"])){
					
						$sql1 = "			
									SELECT  F.faculty_id, concat(F.lname, ', ', F.fname, ' ', F.mname) 'Faculty', CL.section_id 'Section', CL.course_code 'Course'
									FROM faculty F, course CO, class CL
									WHERE CL.course_code = CO.course_code AND F.faculty_id = CL.faculty_id
										 AND CL.Term = '1' AND CL.year = '2016 - 2017' ";
					if($_POST["fID"] != ""){ 
							$sql1 = $sql1 . "AND CL.faculty_id = '". $_POST["fID"] ."' ";
					}
					if($_POST["cCODE"] != ""){
							$sql1 = $sql1 . "AND CL.course_code = '" . $_POST["cCODE"] .  "' ";	
					}
					if($_POST["SECT"] != ""){
							$sql1 = $sql1 . "AND CL.section_id = '" . $_POST["SECT"] .  "' ";		
					}
					
					$sql1 = $sql1 . "ORDER BY 1;";
					$result = $conn->query($sql1);
					
					if ($result->num_rows > 0) {
						echo "<table border = '1'><tr><th>Faculty ID</th>
									<th>Faculty</th>
									<th>Section</th>
									<th>Course</th>
									</tr>";

						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<tr><td align = 'center'>".$row["faculty_id"]."</td align = 'center'>
									<td align = 'center'>".$row["Faculty"]."</td align = 'center'>
									<td align = 'center'>".$row["Section"]."</td align = 'center'>
									<td align = 'center'>".$row["Course"]."</td align = 'center'>
									</tr>";
									}
						
						echo "</table>";
						
						} else {
						
							echo "<br> <h1> No Results </h1>";
						
						}
					
				}
				
			?>
	</body>
</html>
	
