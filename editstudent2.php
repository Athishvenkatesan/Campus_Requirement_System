<html>
	<head>
		<title>Edit Student Details 2</title>
		<link rel="stylesheet" href="/css/overlap__gallery.css"/>
	</head>
<body>
<br>
<center><h1>Update / Delete Student Details</h1></center>

	<table border="1" align="center">
		<form action="" method="post">
	<?php
	
		if(isset($_POST['view']))
			{
				$a=$_POST['adno'];
			
				$con=mysqli_connect("localhost", "root", "athish123","campus");
				$query="select * from student_details where admission='$a'";
				$result=mysqli_query($con,$query);
				
			while($row=mysqli_fetch_array($result))
				{
				echo"<tr><td>Student Name</td><td><input type='text' name='studentname' value='".$row[0]."'>
						</td></tr><tr><td>Father Name</td><td><input type='text' name='fathername' value='".$row[1]."'>
						</td></tr><tr><td>Gender</td><td><input type='text' name='gender' value='".$row[2]."'>
						</td></tr><tr><td>Date Of Birth</td><td><input type='text' name='dob' value='".$row[3]."'>
						</td></tr><tr><td>History Of Arrear</td><td><input type='text' name='hoa' value='".$row[4]."'>
						</td></tr><tr><td>Standing Arrear</td><td><input type='text' name='sa' value='".$row[5]."'>
						</td></tr><tr><td>Last Semeister(Per)</td><td><input type='text' name='lsp' value='".$row[6]."'>
						</td></tr><tr><td>10<sup>th</sup>Mark</td><td><input type='text' name='tenthmark' value='".$row[7]."'>
						</td></tr><tr><td>12<sup>th</sup>Mark</td><td><input type='text' name='twlthmark' value='".$row[8]."'>
						</td></tr><tr><td>Department</td><td><input type='text' name='department' value='".$row[9]."'>
						</td></tr><tr><td>Admission Number</td><td><input type='text' name='adno' value='".$row[10]."'>
						</td></tr><tr><td>Year</td><td><input type='text' name='year' value='".$row[11]."'>
						</td></tr><tr><td>Contact Number</td><td><input type='text' name='contactno' value='".$row[12]."'>
						</td></tr><tr><td>E-Mail ID</td><td><input type='text' name='email' value='".$row[13]."'>
						</td></tr><tr><td>Address</td><td><input type='text' name='address' value='".$row[14]."'></td></tr>
						<tr align='center'><td colspan='2'><input type='submit' value='Update' name='update'><input type='submit' value='Delete' name='delete'></td></tr>
						<tr align='center'><td colspan='2'><a href='h.php'>Home</a></td></tr>";
				}
			}
		if(isset($_POST['update']))
			{
			$a=$_POST['adno'];
			$b=$_POST['studentname'];
			$c=$_POST['fathername'];
			$d=$_POST['gender'];
			$e=$_POST['dob'];
			$f=$_POST['hoa'];
			$g=$_POST['sa'];
			$h=$_POST['lsp'];
			$i=$_POST['tenthmark'];
			$j=$_POST['twlthmark'];
			$k=$_POST['department'];
			$l=$_POST['year'];
			$m=$_POST['contactno'];
			$n=$_POST['email'];
			$o=$_POST['address'];
			
			$con=mysqli_connect("localhost", "root", "athish123","campus");
			$query="update student_details set studentname='$b', fathername='$c', gender='$d', dob='$e', historyofarrear='$f', standingarrear='$g', lastsemeisterper='$h', tenthmark='$i', twlthmark='$j', department='$k', year='$l', contactno='$m', email='$n', address='$o' where admission='$a'";
			mysqli_query($con,$query);
			echo"<script>alert('Record Updated Sucesfully')</script>";
			
			}
		else if (isset($_POST['delete']))
			{
			$a=$_POST['adno'];
			$b=$_POST['studentname'];
			$c=$_POST['fathername'];
			$d=$_POST['gender'];
			$e=$_POST['dob'];
			$f=$_POST['hoa'];
			$g=$_POST['sa'];
			$z=$_POST['lsp'];
			$h=$_POST['tenthmark'];
			$i=$_POST['twlthmark'];
			$j=$_POST['department'];
			$k=$_POST['year'];
			$l=$_POST['contactno'];
			$m=$_POST['email'];
			$n=$_POST['address'];
			
			
			$con=mysqli_connect("localhost", "root", "athish123","campus");
			$query="delete from student_details where admission='$a'";
			mysqli_query($con,$query);
			echo"<script>alert('Record Deleted Sucesfully')</script>";
			
			}
			
	?>
				</form>
			</table>
</body>
</html>