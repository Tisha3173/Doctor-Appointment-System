<?php
session_start();
include('connect.php');

if(isset($_POST['adsub'])){
	$username=$_POST['username1'];
	$password=$_POST['password2'];
	$query="select * from admintb where username='$username' and password='$password';";
	$result=$GLOBALS['conn']->query($query);
	if($result->num_rows==1)
	{
		$_SESSION['username']=$username;
		header("Location:admin-panel.php");
	}
	else
		// header("Location:error2.php");
		echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'index1.php';</script>");
}

