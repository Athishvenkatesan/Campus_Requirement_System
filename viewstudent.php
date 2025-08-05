<html>
	<head>
		<title>View All Student Details </title>
		<link rel="stylesheet" href="/css/overlap__gallery.css"/>
	</head>
<body>
<br>
<br>
<center><h1>Show All The Student Details In Database</h1></center>
<br>	
	<table border="1" align="center">
	<tr align="center">
	<td>Student Name</td>
	<td>Father Name</td>
	<td>Gender</td>
	<td>Date Of Birth</td>
	<td>History Of Arrear</td>
	<td>Standing Arrear</td>
	<td>last Semister Percentage</td>
	<td>10<sup>th</sup>Mark (Per)</td>
	<td>12<sup>th</sup>Mark (Per)</td>
	<td>Department</td>
	<td>Admission Number</td>
	<td>Year</td>
	<td>Contact Number</td>
	<td>E-Mail ID</td>
	<td>Address</td>
	</tr>
	
<?php
		$con=mysqli_connect("localhost", "root", "athish123","campus");
		$query="select * from student_details";
		$res=mysqli_query($con,$query);
				
			while($coln=mysqli_fetch_array($res))
			{
			
			echo"<tr><td>".$coln[0]."</td><td>".$coln[1]."</td><td>".$coln[2]."</td><td>".$coln[3]."</td><td>".$coln[4]."</td><td>".$coln[5]."</td><td>".$coln[6]."</td><td>".$coln[7]."</td><td>".$coln[8]."</td><td>".$coln[9]."</td><td>".$coln[10]."</td><td>".$coln[11]."</td><td>".$coln[12]."</td><td>".$coln[13]."</td><td>".$coln[14]."</td></tr>";
			}
	
?>
	<tr align="center">
	<td colspan="14"><a href="studenthome.php"><input type="button" name="Home" value="Home" /></a><a href="report.php"><input type="button" name="Back" value="Back" /></a></td>
	</tr>
	</table>
	
</body>
</html> 