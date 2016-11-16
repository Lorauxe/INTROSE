<?php
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "attendance";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
	if(!empty($_POST["course_code"])){
		$sql = "update class set course_code = '".$_POST["course_code"]."' where classID = '".$_POST["row"]."'";
		$conn->query($sql);
	}
	if(!empty($_POST["section_id"])){
		$sql = "update class set section_id = '".$_POST["section_id"]."' where classID = '".$_POST["row"]."'";
		$conn->query($sql);
	}
	if(!empty($_POST["faculty_id"])){
		$sql = "update class set faculty_id = '".$_POST["faculty_id"]."' where classID = '".$_POST["row"]."'";
		$conn->query($sql);
	}
	
	$sql = "select * from class";
	$result = $conn->query($sql);
	
	echo "<table border='1'>";
	if($result->num_rows > 0) {
		echo "	<tr>
				<td>classID</td>
				<td>section_id</td>
				<td>course_code</td>
				<td>faculty_id</td>
				<td>timestart</td>
				<td>timestop</td>
				<td>day</td>
				<td>room</td>
				<td>year</td>
				<td>term</td>
			</tr>";
	    	while($row = $result->fetch_assoc()) {
			echo "	<tr>
					<td>" . $row["classID"] . "</td>
					<td>" . $row["section_id"]. "</td>
					<td>" . $row["course_code"]. "</td>
					<td>" . $row["faculty_id"]. "</td>
					<td>" . $row["timestart"]. "</td>
					<td>" . $row["timestop"]. "</td>
					<td>" . $row["day"]. "</td>
					<td>" . $row["room"]. "</td>
					<td>" . $row["year"]. "</td>
					<td>" . $row["Term"]. "</td>
				</tr>";
	    	}
	}
	echo "</table>";
	mysqli_close($conn);
?>
<html>	
	<body>
	<form action="edit_wip.php" method="post">
		ROW SELECT(test): 
		<select name="row">
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
		</select> <br>
		COURSE CODE: <input type="text" name="course_code"><br>
		SECTION ID: <input type="text" name="section_id"><br>
		FACULTY ID: <input type="text" name="faculty_id"><br>
		TIME: <input type="text" name="timestart"> - <input type="text" name="timestop"><br>
		<input type="submit">
	</form>	
	
	</body>
</html>