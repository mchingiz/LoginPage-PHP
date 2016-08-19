<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<h1>Admin Login</h1>
		<h4>Sign in to your account</h4>
		<form method="post" action="check.php" method="post">
			<input type="type" name="username">
			<input type="password" name="password">
			<input type="submit" name="submit">
		</form>
		
		<?php
		
		session_start();
		
		
		if(isset($_SESSION['empty'])){ ?>
			<div><p><?= $_SESSION['empty']?></p></div>
		<?php 
			unset($_SESSION['empty']);
			} ?>
		
		
		
		<script src="assets/js/jquery-3.1.0.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
	</body>
</html>
<script type="text/javascript">
	$(document).submit(function(){
		
	})
</script>