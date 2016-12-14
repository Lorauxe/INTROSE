<!doctype>
<html>
<head>
</head>
<body>
<?php
	$SERVERNAME = "localhost";
	$USERNAME = "root";
	$PASSWORD = "";
	$DATABASE = "attendance";

	
	$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	require_once "../libraries/Classes/PHPExcel.php";

	function coordinates($x,$y){
		return PHPExcel_Cell::stringFromColumnIndex($x).$y;
	}
	
	$tmpfname = "../../uploads/test.xlsx";
	$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
	$excelObj = $excelReader->load($tmpfname);
	$worksheet = $excelObj->getActiveSheet();
	$lastRow = $worksheet->getHighestRow();
	
	$x = 0;
	$y = 1;
	
	$ccode = $worksheet->getCell(coordinates(1,$y))->getValue();
	$dept = $worksheet->getCell(coordinates(3,$y))->getValue();
	$ay = $worksheet->getCell(coordinates(1,$y+1))->getValue();
	$term = $worksheet->getCell(coordinates(3,$y+1))->getValue();
	
	$y = $y + 3;
	
	
	$rowset = array();
	
	while(strcmp($worksheet->getCell(coordinates(0,$y))->getValue(),"--- end---") != 0){				
		if(strcmp($worksheet->getCell(coordinates(0,$y))->getValue(),"Total") == 0){
			$y = $y + 2;
		}elseif(strcmp($worksheet->getCell(coordinates(0,$y))->getValue(),"College code:") == 0){
			$ccode = $worksheet->getCell(coordinates(1,$y))->getValue();
			$dept = $worksheet->getCell(coordinates(3,$y))->getValue();
			$ay = $worksheet->getCell(coordinates(1,$y+1))->getValue();
			$term = $worksheet->getCell(coordinates(3,$y+1))->getValue();
			$y = $y + 3;	
		}else{
			$y++;
			echo $ccode . " | ";
			echo $dept . " | ";
			echo $ay . " | ";
			echo $term . " | ";
			
			$rowset[12] = $ccode;
			$rowset[13] = $dept;
			$rowset[14] = $ay;
			$rowset[15] = $term;
			
			for($x = 0; $x < 12; $x++){
				echo $worksheet->getCell(coordinates($x,$y-1))->getValue() . " | ";
				$rowset[$x] = $worksheet->getCell(coordinates($x,$y-1))->getValue();
			}
			/*
			$sql = "INSERT INTO tablename (". .")
			VALUES (".$rowset[0].$rowset[1].$rowset[2].$rowset[3].$rowset[4].$rowset[5].$rowset[6].$rowset[7].$rowset[8].$rowset[9].$rowset[10].$rowset[11].$rowset[12].$rowset[13].$rowset[14].$rowset[15].$rowset[16].")";

			if (mysqli_query($conn, $sql)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			*/
			echo "<br/>";
		}
	}
	mysqli_close($conn);	
?>
</body>
</html>