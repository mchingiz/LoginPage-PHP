<?php
	session_start();
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$check=$_POST['submit'];
	$_SESSION['loggedin']=false;
	
/*	echo($username);
	echo($password);*/

	if($check){
		
		if( empty($username) && empty($password) ){
			$_SESSION['empty']="Xanalari doldurun";
			header("Location:index.php");
		}
		else if($username=="admin@code.edu.az" && $password=="123456"){
			$_SESSION['loggedin']=true;
			header("Location:admin.php");
		}else{
			$_SESSION['empty']="Parol ve ya mail sehvdi";
			header("Location:index.php");
		}
		
	}
?>