<html>
	<head>
		<title>Upload Student Details 2</title>
		<link rel="stylesheet" href="/css/overlap__gallery.css"/>
	</head>
<body>
<br>
<br>
<center><h1>Documentation Uploded Form</h1></center>
<br>
<br>
	<table border="1" align="center">
		<form action="uploadfile2.php" method="post" enctype="multipart/form-data">
	<?php
	
		if(isset($_POST['view']))
			{
				$a=$_POST['adno'];
			
				$conn=mysqli_connect("localhost", "root", "athish123","campus");
				$query="select * from student_details where admission='$a'";
				$result=mysqli_query($conn,$query);
				
			while($row=mysqli_fetch_array($result))
				{
				echo"<tr><td>Admission Number</td><td><input type='text' name='adno' value='".$row[9]."'>
						</td></tr><tr><td>Student Name</td><td><input type='text' name='studentname' value='".$row[0]."'>
						</td></tr><tr><td>Department</td><td><input type='text' name='department' value='".$row[8]."'>
						</td></tr><tr><td>Year</td><td><input type='text' name='year' value='".$row[10]."'>
						<tr align='center'><td>UPload 10<sup>th</sup> And 12<sup>th</sup> Mark Sheet As Single File:</td><td>
						<input type='file' name='file' id='file' /></td>
						<tr align='center'><td colspan='2'>
						<input type='submit' name='submit' value='Submit' /></td></tr>
						<tr align='center'><td colspan='2'><a href='h.php'>Home</a></td></tr>";
				}
			}
			
?>
				</form>
			</table>
</body>
</html>