<html>
	<head>
		<title>View All Company Details </title>
		<link rel="stylesheet" href="/css/overlap__gallery.css"/>
	</head>
<body>
<br>
<br>
<center><h1>Show All The Company Details In Database</h1></center>
<br>	
	<table border="1" align="center">
	<tr align="center">
	<td>Company Form</td>
	<td>Date</td>
	<td>Name Of The Post</td>
	<td>Required Programming Language</td>
	<td>Place Of Work</td>
	<td>Salary Per Annum</td>
	<td>History Of Arrear</td>
	<td>Standing Arrear</td>
	<td>12<sup>th</sup>Mark (Per)</td>
	<td>10<sup>th</sup>Mark (Per)</td>
	</tr>
	
<?php

		$con=mysqli_connect("localhost", "root", "athish123","campus");
		$query="select * from company_form";
		$res=mysqli_query($con,$query);
				
			while($coln=mysqli_fetch_array($res))
			{
			echo"<tr><td>".$coln[0]."</td><td>".$coln[1]."</td><td>".$coln[2]."</td><td>".$coln[3]."</td><td>".$coln[4]."</td><td>".$coln[5]."</td><td>".$coln[6]."</td><td>".$coln[7]."</td><td>".$coln[8]."</td><td>".$coln[9]."</td></tr>";
			}
	
?>
	<tr align="center">
	<td colspan="14"><a href="companyhome.php"><input type="button" name="Home" value="Home" /></a><a href="report.php"><input type="button" name="Back" value="Back" /></a></td>
	</tr>
	</table>
	
</body>
</html> 