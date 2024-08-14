<?php 
include('connect.php');
if(isset($_POST['btnSubmit']))
{
	$name = $_POST['firstname'];
	$email = $_POST['email'];
	$lastname = $_POST['lastname'];
	$message = $_POST['message'];

	$query="insert into contactinfo(firstname,email,lastname,message) values('$name','$email','$lastname','$message');";
	$result=$GLOBALS['conn']->query($query);
	
	if($result===TRUE)
    {
    	echo '<script type="text/javascript">'; 
		echo 'alert("Message sent successfully!");'; 
		echo 'window.location.href = "index.php";';
		echo '</script>';
    }
}