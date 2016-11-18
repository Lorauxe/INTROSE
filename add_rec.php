<?PHP

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
				
				if(isset($_POST["F_ID"]) && isset($_POST["C_CODE"]) && isset($_POST["SECT"]) && isset($_POST["DATE"]) && isset($_POST["REMARK"]) && isset($_POST["CHKR"])){
					echo"HEY";
					//fID, SECT and C_CODE needed to get class ID
					$sql = "SELECT classID
							FROM class
							WHERE faculty_id = " . $_POST["F_ID"] . " 
							      AND section_id = '" . $_POST["SECT"] . "' 
								  AND course_code = '" . $_POST["C_CODE"]. "';"; 	

					$results = $conn->query($sql);
					
					if($results->num_rows == 0) {
						echo "<h2>The class you've entered is non-existent!</h2> <br>";
					}else {
						$row = $results->fetch_assoc();
						$sql_add = "INSERT INTO record (classID,date,checker_id,remarks_id,status) VALUES ('" .$row["classID"]."','".$_POST["DATE"]."','".$_POST["CHKR"]."','".$_POST["REMARK"]."','done')";
						
						if($conn->query($sql_add) == TRUE){
							echo "<h2>Added the new record successfully!</h2> <br>";
						}else{
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
					}
					
				}
		

?>




<html>
	<head>
	</head>
	<body>
	
	<form action="add_rec.php" method = "post">
	Faculty ID: <input type="text" name="F_ID" required><br>
	Date: <input type="date" name="DATE" required><br>
	Course Code: <input type = "text" name="C_CODE" required><br>
	Section: <input type = "text" name="SECT" required><br>
	Remarks: <input type = "text" name="REMARK" required><br>
	Checker: <input type = "text" name="CHKR" required><br>
	<input type = "submit" value = "Add">
	</form>

	</body>
</html>
