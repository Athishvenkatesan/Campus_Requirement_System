<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Student log-in page</title>
        <link rel="stylesheet" href="css/log.css">
    </head>
    <body>
        <form action="" method="post">
            <div class="box">
                <h2>Student Login</h2>
                <div class="login">
                    <input type="text" name="username" placeholder="rollnumber">
                    <label>Username</label>
                </div>
                <div class="login">
                    <input type="password" name="password" placeholder="rollnumber">
                    <label>Password</label>
                </div>
                <button name="log">Sign - In</button>
            </div>
        </form>
        <?php
				
				if(isset($_POST['log']))
				{
                    $name=$_POST['username'];
				    $pwd=$_POST['password'];
                    
                    if($name=="" || $pwd=="")
                        {
                            echo "<script>alert('invalid username and password')</script>";
                        }
                    else
                    {
                        $con=mysqli_connect("localhost", "root", "athish123","campus");
			    	    $query="select * from student_details where admission='$name'";
			    	    $result=mysqli_query($con,$query);
				
			     while($row=mysqli_fetch_array($result))
				    {
                        if(($name==$row[10]) && ($pwd==$row[10]))
                        {
                        echo("<script>window.location.href='studenthome.php'</script>");
                        }
                        else
                        {
                        echo"<script>alert('User name and Password Incorrect')</script>";
                        }
                    }
                    }
				}
			?>
    </body>
</html>