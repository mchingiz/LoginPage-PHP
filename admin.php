<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<?php
		session_start();
		
			if( $_SESSION['loggedin'] ){ ?>
				<h1>Welcome, admin</h1>
		
			<form action="logout.php" method="post">
				<input type="submit" name="logout" value="logout">
			</form>
			
			<?php }else{
				header("Location:index.php");
			} ?>
	</body>
</html>