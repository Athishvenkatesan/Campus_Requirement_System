<html>
	<head>
		<title>Uploading File</title>
	</head>
<body>
	<?php
		
		
		if(isset($_POST['submit']))
			{
				$z=$_FILES['file']['name'];
				$y=$_SERVER['DOCUMENT_ROOT']."/campus_requirement_system/document";
				move_uploaded_file($_FILES["file"]["tmp_name"],$y."/". $_FILES["file"]["name"]);
			
			$a=$_POST['adno'];
			$b=$_POST['studentname'];
			$d=$_POST['department'];
			$e=$_POST['year'];
			
			$con=mysqli_connect("localhost", "root", "athish123","campus");
			$query="insert into records values('$a', '$b', '$d', '$e', '$z')";
			mysqli_query($con,$query);
			echo"<script>alert('Record Updated Sucesfully')</script>";
			
			}
	?>
</body>
</html>