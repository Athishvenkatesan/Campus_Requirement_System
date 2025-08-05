<html>
	<head>
		<title>Report</title>
		<link rel="stylesheet" href="/css/overlap__gallery.css"/>
	</head>
<body>
<br>
<br>
<center><h1>Report Details</h1></center>
<br>
<br>
	<table border="1" align="center">
		<form action="" method="post">
	<tr align="center">
	<td colspan="2">Choose Report Details</td>
	</tr>
	<tr align="center">
	<td>
		<input type="radio" name="select" value="student" />Student Details 
		<input type="radio" name="select" value="company"  />Company Details
	</td>
	</tr>
	<tr align="center">
	<td>
		<input type="submit" name="view" value="view">
	</td>
	</tr>
	<tr align="center">
		<td colspan="2"><a href="index.php">Back</a></td>
	</tr>
		</form>
	</table>
	
	
	<?php
	
			if(isset($_POST['view']))
			{
			$a=$_POST['select'];
				if($a=="student")
				{
				echo("<script>window.location.href='viewstudent.php'</script>");
				}
				else if($a=="company")
				{
				echo("<script>window.location.href='viewcompany.php'</script>");
				}
			}
	
	
	?>
	
</body>
</html>