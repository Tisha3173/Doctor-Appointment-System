<?php
session_start();
include('connect.php');
if(isset($_POST['docsub1'])){
	$dname=$_POST['username3'];
	$dpass=$_POST['password3'];
	$query="select * from doctb where username='$dname' and password='$dpass';";
	$result=$GLOBALS['conn']->query($query);
	if($result->num_rows==1)
	{
    while($row=$result->fetch_array(MYSQLI_ASSOC)){
    
		      $_SESSION['dname']=$row['username'];
      
    }
		header("Location:doctor-panel.php");
	}
	else{
    // header("Location:error2.php");
    echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'index1.php';</script>");
  }
}


