<html>
	<head>
		<title>Edit Company Details 2</title>
		<link rel="stylesheet" href="/css/overlap__gallery.css"/>
	</head>
<body>
<br>
<br>
<center><h1>Update/Delete Company Details</h1></center>
<br>
<br>
	<table border="1" align="center">
		<form action="" method="post">
	<?php
	
		if(isset($_POST['view']))
			{
				$a=$_POST['cn'];
			
				$con=mysqli_connect("localhost", "root", "athish123","campus");
				$query="select * from company_form where companyname='$a'";
				$result=mysqli_query($con,$query);
				
			while($row=mysqli_fetch_array($result))
				{
				echo"<tr><td>Company Name</td><td><input type='text' name='cn' value='".$row[0]."'>
						</td></tr><tr><td>Appoinment Date</td><td><input type='text' name='date' value='".$row[1]."'>
						</td></tr><tr><td>Name Of The Post</td><td><input type='text' name='notp' value='".$row[2]."'>
						</td></tr><tr><td>Required Language</td><td><input type='text' name='rl' value='".$row[3]."'>
						</td></tr><tr><td>Place Of Work</td><td><input type='text' name='pow' value='".$row[4]."'>
						</td></tr><tr><td>Salary Per Annum</td><td><input type='text' name='spa' value='".$row[5]."'>
						</td></tr><tr><td>History Of Arrer</td><td><input type='text' name='hoa' value='".$row[6]."'>
						</td></tr><tr><td>Standing Arrear</td><td><input type='text' name='sa' value='".$row[7]."'>
						</td></tr><tr><td>Last Semeister(per)</td><td><input type='text' name='ls' value='".$row[8]."'>
						</td></tr><tr><td>12<sup>th</sup>Mark</td><td><input type='text' name='twlthmark' value='".$row[9]."'>
						</td></tr><tr><td>10<sup>th</sup>Mark</td><td><input type='text' name='tenthmark' value='".$row[10]."'></td></tr>
						<tr align='center'><td colspan='2'><input type='submit' value='Update' name='update'><input type='submit' value='Delete' name='delete'></td></tr>
						<tr align='center'><td colspan='2'><a href='h.php'>Home</a></td></tr";
				}
			}
		if(isset($_POST['update']))
			{
			$a=$_POST['cn'];
			$b=$_POST['date'];
			$c=$_POST['notp'];
			$d=$_POST['rl'];
			$e=$_POST['pow'];
			$f=$_POST['spa'];
			$g=$_POST['hoa'];
			$h=$_POST['sa'];
			$i=$_POST['ls'];
			$j=$_POST['twlthmark'];
			$k=$_POST['tenthmark'];
			
			$con=mysqli_connect("localhost", "root", "athish123","campus");
			$query="update company_form set date='$b', nameofpost='$c', requiredlanguage='$d', placeofwork='$e', salaryperannum='$f', historyofarrear='$g', standingarrear='$h', lastsemper='$i', twlthmarkper='$j', tenthmarkper='$k' where companyname='$a'";
			mysqli_query($con,$query);
			echo"<script>alert('Record Updated Sucesfully')</script>";
			}
		else if (isset($_POST['delete']))
			{
			$a=$_POST['cn'];
			$b=$_POST['date'];
			$c=$_POST['notp'];
			$d=$_POST['rl'];
			$e=$_POST['pow'];
			$f=$_POST['spa'];
			$g=$_POST['hoa'];
			$h=$_POST['sa'];
			$i=$_POST['ls'];
			$j=$_POST['twlthmark'];
			$k=$_POST['tenthmark'];
			
			$con=mysqli_connect("localhost", "root", "athish123","campus");
			$query="delete from company_form where companyname='$a'";
			mysqli_query($con,$query);
			echo"<script>alert('Record Deleted Sucesfully')</script>";
			
			}
			
	?>
				</form>
			</table>
</body>
</html>