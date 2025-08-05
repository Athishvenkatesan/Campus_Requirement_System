<html>
	<head>
		<title>Eligible Ceritea</title>
		<link rel="stylesheet" href="/css/overlap__gallery.css"/>
	</head>
<body>
<br>
<br>
	<table align="center" border="1">
		<form action="req2.php" method="post">
		<tr align="center">
		<td>Select Company</td>
		<td><select name="sel">			<!--Displaying Company Name From The Data-Base-->
				<?php
					$con=mysqli_connect("localhost", "root", "athish123","campus");
					$query="select companyname from company_form";
					$result=mysqli_query($con,$query);
					while($row=mysqli_fetch_array($result))
					{
					$s=$row[0];
					echo"<option value=".$s.">".$s."</option>";
					}
				?>
				</select>
		</td>
		</tr>
		<tr align="center">
		<td colspan="2"><input type="submit" value="view" name="view"></td>
		</tr>
		<tr align="center">
		<td colspan="2"><a href="h.php">Home</a></td>
		</tr>
		

		</form>
	</table>
</body>
</html>