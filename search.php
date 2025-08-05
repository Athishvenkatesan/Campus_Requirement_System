<html>
	<head>
		<title>Report</title>
		<link rel="stylesheet" type="text/css" href="/css/overlap__gallery.css"/>
		 <link rel="stylesheet" type="text/css" href="/css/style.css">
  </head>
  <body>
<header>
      <h1>Campus Recruitment System</h1>
      <nav>
        <ul><b>
          <li><a href="h.php">Home</a></li>
		  <li><a href="uploadstudent.php">Document</a></li>
          <li><a href="studentdetails.php">Student</a></li>
          <li><a href="companyform.php">Company</a></li>
		  <li><a href="req.php">Requirement</a></li>
		  <li><a href="report.php">Report</a></li>
		  <li><a href="search.php">Search</a></li>
		  <li><a href="about.php">About Us</a></li>
		  <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="logout.php">Log - Out</a></li>
        </ul></b>
      </nav>
    </header>
       <br>
   <br>
   <center><h1>Search a particular sutdent</h1></center>
<br>
	<table border="1" align="center">
		<form action="" method="post">
	<tr align="center">
		<td>Student Name </td>
		<td> <input type="text" name="studentname" /></td>
	</tr>
	<tr align="center">
		<td colspan="2"><input type="submit" value="View" name="view" /></td>
	</tr>
	<tr align="center">
		<td colspan="2"><a href="h.php">Back</a></td>
	</tr>
		</form>
	</table>
<table border='1' align='center'><tr align='center'><td>Student Name</td><td>Father Name</td><td>Gender</td><td>Date Of Birth</td><td>History Of Arrear</td><td>Standing Arrear</td><td>last Semister Percentage</td><td>10<sup>th</sup>Mark (Per)</td><td>12<sup>th</sup>Mark (Per)</td><td>Department</td><td>Admission Number</td><td>Year</td><td>Contact Number</td><td>E-Mail ID</td><td>Address</td></tr>
	<?php
	
		if(isset($_POST['view']))
		{
		$a=$_POST['studentname'];
		
		$con=mysqli_connect("localhost", "root", "athish123", "campus");
		$sql="select * from student_details where studentname like '$a%'";
		$res=mysqli_query($con,$sql);
				
			while($coln=mysqli_fetch_array($res))
			{
			
			echo"<tr><td>".$coln[0]."</td><td>".$coln[1]."</td><td>".$coln[2]."</td><td>".$coln[3]."</td><td>".$coln[4]."</td><td>".$coln[5]."</td><td>".$coln[6]."</td><td>".$coln[7]."</td><td>".$coln[8]."</td><td>".$coln[9]."</td><td>".$coln[10]."</td><td>".$coln[11]."</td><td>".$coln[12]."</td><td>".$coln[13]."</td><td>".$coln[14]."</td></tr>";
			}
		}
	?>
	</table>
	<br>
	<br>
</body>
</html>