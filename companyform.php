<html>
	<head>
		<title>Company Form </title>
		<link rel="stylesheet" href="/css/overlap__gallery.css"/>
	</head>
<body>
<br>
		<h1>COMPANY REGISTRATION</h1>
<br>
	<table border="1" align="center">
		<form action="" method="post">
	<tr align="center">
	<td>Company Name</td>
	<td><input type="text" name="cn" /></td>
	</tr>
	<tr align="center">
	<td>Appoinment Date</td>
	<td><input type="date" name="date" /></td>
	</tr>
	<tr align="center">
	<td>Name Of The Post </td>
	<td><input type="text" name="notp" /></td>
	</tr>
	<tr align="center">
	<td>Required Language</td>
	<td><select name="rl" size="1">
		<option value="php" selected="selected">PHP</option>
		<option value="net">.NET</option>
		<option value="java">JAVA</option>
		<option value="mysql">MYSQL</option>
		<option value="oracel">ORACEL</option></select></td>
	</tr>
	<tr align="center">
	<td>Place Of Work</td>
	<td><input type="text" name="pow" /></td>
	</tr>
	<tr align="center">
	<td>Salary Per Annum</td>
	<td><input type="text" name="spa"/></td>
	</tr>
	<tr align="center">
	<td>History Of Arrear</td>
	<td><input type="text" name="hoa" /></td>
	</tr>
	<tr align="center">
	<td>Stanging Arrear</td>
	<td><input type="text" name="sa" /></td>
	</tr>
	<tr align="center">
	<td>Last Semister(pre)</td>
	<td><input type="text" name="ls" /></td>
	</tr>
	<tr align="center">
	<td>12<sup>th</sup>Mark(Per)</td>
	<td><input type="text" name="twlthmark" /></td>
	</tr>
	<tr align="center">
	<td>10<sup>th</sup>Mark(Per)</td>
	<td><input type="text" name="tenthmark" /></td>
	</tr>
	<tr align="center">
	<td colspan="2"><input type="submit" value="Submit" name="submit" /></td>
	</tr>
	<tr align="center">
		<td colspan="2"><a href="editcompany.php">Edit Company Details</a></td>
	</tr>
	<tr align="center">
		<td colspan="2"><a href="h.php">Back</a></td>
	</tr>
			</form>
	</table>
	
		<?php
		
		
		if(isset($_POST['submit']))
				{
					
					$companyname=$_POST['cn'];
					$date=$_POST['date'];
					$nameofpost=$_POST['notp'];
					$requriedlanguage=$_POST['rl'];
					$place=$_POST['pow'];
					$salary=$_POST['spa'];
					$history=$_POST['hoa'];
					$standingarrear=$_POST['sa'];
					$lastsem=$_POST['ls'];
					$twlmark=$_POST['twlthmark'];
					$tenmark=$_POST['tenthmark'];
		
			if(($companyname=="")||($date=="")||($nameofpost=="")||($requriedlanguage=="")||($place=="")||($salary=="")||($history=="")||($standingarrear=="")||($lastsem=="")||($twlmark=="")||($tenmark==""))
					{
					echo("<script>alert('Fill All Detail')</script>");
		 			}
			
				else
				{
					$con=mysqli_connect("localhost","root","athish123","campus");
					$query="INSERT INTO company_form VALUES('$companyname','$date','$nameofpost','$requriedlanguage','$place','$salary','$history','$standingarrear','$lastsem','$twlmark','$tenmark')";
					mysqli_query($con,$query);
					echo("<script>alert('Record Is Added Successfully')</script>");
				}
				}
		?>
</body>
</html>