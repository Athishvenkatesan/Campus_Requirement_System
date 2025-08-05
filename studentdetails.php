<html>
	<head>
		<title>Student Details</title>
		<link rel="stylesheet" href="/css/overlap__gallery.css"/>
	</head>
<body>
		<h1>STUDENT REGISTRATION</h1>
	<table border="1" align="center">
		<form action="" method="post">
	<tr align="center">
		<td> Admission Number </td>
		<td><input type="text" name="adno" /></td>
	</tr>
	<tr align="center">
		<td>Student Name </td>
		<td> <input type="text" name="studentname" /></td>
	</tr>
	<tr align="center">
		<td>Father Name </td>
		<td> <input type="text" name="fathername" /></td>
	</tr>
	<tr align="center">
		<td>Gender </td>
		<td> <input type="radio" name="gender" value="Male" />Male <input type="radio" name="gender" value="Female"  />Female </td>
	</tr>
	<tr align="center">
		<td>Date Of Birth</td>
		<td> <input type="date" name="dob" /></td>
	</tr>
	<tr align="center">
		<td>History Of Arrear</td>
		<td><input type="text" name="hoa"></td>
	</tr>
	<tr align="center">
		<td>Standing Arrear</td>
		<td><input type="text" name="sa"></td>
	</tr>
	<tr align="center">
	<td>Last Semister(Per)</td>
	<td><input type="text" name="lsp" /></td>
	</tr>
	<tr align="center">
		<td>10<sup>th</sup> Mark Percentage </td>
		<td> <input type="text" name="tenthmark" /></td>
	</tr>
	<tr align="center">
		<td>12<sup>th</sup>Mark Percentage</td>
		<td> <input type="text" name="twlthmark" /></td>
	</tr>
	<tr align="center">
		<td>Department </td>
		<td> <select name="department" size="1">
		<option value="B.sc CS" selected="selected"> B.Sc CS</option>
		<option value="B.sc IT"> B.Sc IT</option>
		<option value="BCA">BCA</option>
		<option value="Data Science">Data Science</option>
		<option value="Bio Tech">Bio Tech</option></select></td>
	</tr>
	<tr align="center">
		<td>Year</td>
		<td><input type="text" name="year" /></td>
	</tr>
	<tr align="center">
		<td> Contact Number </td>
		<td> <input type="text" name="contactnumber" /></td>
	</tr>
	<tr align="center">
		<td>Email ID </td>
		<td> <input type="text" name="email" /></td>
	</tr>
	<tr align="center">
		<td> Address </td>
		<td><textarea name="address"></textarea></td>
	</tr>
	<tr align="center">
		<td colspan="2"><input type="submit" value="Submit" name="studentdetailsubmit" /></td>
	</tr>
	<tr align="center">
		<td colspan="2"><a href="editstudent.php">Edit Student Details</a></td>
	</tr>
	<tr align="center">
		<td colspan="2"><a href="h.php">Back</a></td>
	</tr>
		</form>
	</table>


		<?php
		 
		 	if(isset($_POST['studentdetailsubmit']))
				{
						$studentname=$_POST['studentname'];
		 				$fathername=$_POST['fathername'];
						$gender=$_POST['gender'];
						$dob=$_POST['dob'];
		 				$historyofarrear=$_POST['hoa'];
		 				$standingarrear=$_POST['sa'];
						$d=$_POST['lsp'];
		 				$tenthmark=$_POST['tenthmark'];
		 				$twlthmark=$_POST['twlthmark'];
		 				$department=$_POST['department'];
		 				$admission=$_POST['adno'];
		 				$year=$_POST['year'];
		 				$contactno=$_POST['contactnumber'];
		 				$email=$_POST['email'];
		 				$address=$_POST['address'];
		 
					if(($studentname=="")||($fathername=="")||($gender=="")||($dob=="")||($historyofarrear=="")||($standingarrear=="")||($d=="")||($tenthmark=="")||($twlthmark=="")||($department=="")||($admission=="")||($year=="")||($contactno=="")||($email=="")||($address==""))
					{
					echo("<script>alert('Fill All Detail')</script>");
		 			}
		 	else
		 		{
					$con=mysqli_connect("localhost","root","athish123","campus");
					$query="INSERT INTO student_details VALUES('$studentname','$fathername','$gender','$dob','$historyofarrear','$standingarrear','$d','$tenthmark','$twlthmark','$department','$admission','$year','$contactno','$email','$address')";
					mysqli_query($con,$query);
					echo("<script>alert('Record Is Added Successfully')</script>");
					}
				}
		?>

</body>
</html>