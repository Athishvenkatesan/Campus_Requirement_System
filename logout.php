<html>
  <head>
    <title>Log-out Page</title>
  </head>
  <body>
		<?php
			session_start();
			unset($_SESSION[$row['1']]);
			unset($_SESSION[$row['2']]);

			session_destroy();
			echo"<script>window.open('index.php','_self');</script>";
		?>
	</body>
</html>