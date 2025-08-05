<html>
	<head>
		<title>req 2</title>
		<link rel="stylesheet" href="/css/overlap__gallery.css"/>
	</head>
<body>
<table border="1" align="center">
	<form action="" method="post">
		<?php
		
		if(isset($_POST['view']))
			{
				$a=$_POST['sel'];
			
				$con=mysqli_connect("localhost", "root", "athish123","campus");
				$query="select historyofarrear, standingarrear, lastsemper from company_form where companyname='$a'";
				$result=mysqli_query($con,$query);
				
			while($row=mysqli_fetch_array($result))
				{
				echo"<tr><td>Company Name</td><td>".$a."
						</td></tr><tr><td>History Of Arrear</td><td>".$row[0]."
						</td></tr><tr><td>Standing Arrear</td><td>".$row[1]."
						</td></tr><tr><td>Last Semeister(per)</td><td>".$row[2]."
						</td></tr><tr align='center'><td colspan='2'><input type='submit' value='Select Student Info' name='ssi'></td</tr>
						<tr align='center'><td colspan='2'><a href='h.php'>Home</a></td></tr";
				}
				}
				if(isset($_POST['ssi']))
				{
					
	
					$b=$_POST['hoa'];
					$c=$_POST['sa'];
					$d=$_POST['ls'];
					
					echo"<table border='1' align='center'><tr align='center'><td>Student Name</td><td>Father Name</td><td>Gender</td><td>Date Of Birth</td><td>History Of Arrear</td><td>Standing Arrear</td><td>last Semister Percentage</td><td>10<sup>th</sup>Mark (Per)</td><td>12<sup>th</sup>Mark (Per)</td><td>Department</td><td>Admission Number</td><td>Year</td><td>Contact Number</td><td>E-Mail ID</td><td>Address</td></tr>";
					
					$con=mysqli_connect("localhost", "root", "athish123","campus");
					$query="select * from student_details where lastsemeisterper>='$d' AND historyofarrear<='$b' AND standingarrear<='$c'";
					$res=mysqli_query($con,$query);
				
					while($coln=mysqli_fetch_array($res))
					{
					
			echo"<tr><td>".$coln[0]."</td><td>".$coln[1]."</td><td>".$coln[2]."</td><td>".$coln[3]."</td><td>".$coln[4]."</td><td>".$coln[5]."</td><td>".$coln[6]."</td><td>".$coln[7]."</td><td>".$coln[8]."</td><td>".$coln[9]."</td><td>".$coln[10]."</td><td>".$coln[11]."</td><td>".$coln[12]."</td><td>".$coln[13]."</td><td>".$coln[14]."</td></tr>";
			}	
				echo"<tr align='center'><td colspan='15'><a href='req.php'>Back</a></td></tr>
				<tr align='center'><td colspan='15'><a href='h.php'>Home</a></td></tr>";
				}
							
		?>
	</form>
</table>
</body>
</html>