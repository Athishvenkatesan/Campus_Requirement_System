<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Admin log-in page</title>
        <link rel="stylesheet" href="css/log.css">
    </head>
    <body>
        <form action="" method="post">
            <div class="box">
                <h2>Admin Login</h2>
                <div class="login">
                    <input type="text" name="username">
                    <label>Username</label>
                </div>
                <div class="login">
                    <input type="password" name="password">
                    <label>Password</label>
                </div>
                <button name="log">Sign - In</button><br>
                <center><a href="index.php">Home</a><br><br>      
                <a href="login.php">Login Page</a></center>
            </div>
        </form>
        <?php
				
				if(isset($_POST['log']))
				{
                    $name=$_POST['username'];
				    $pwd=$_POST['password'];
				if(($name=="Admin"|| $name=="admin"||$name=="ADMIN")&&($pwd=="Athish"||$pwd=="athish"||$pwd=="ATHISH"))
				{
				echo("<script>window.location.href='home.php'</script>");
				}
				else
				{
				echo"<script>alert('User name and Password Incorrect')</script>";
				}
				}
			?>
    </body>
</html>