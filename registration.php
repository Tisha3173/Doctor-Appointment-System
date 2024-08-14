<?php
session_start();
include('connect.php');
if (isset($_POST['patsub1'])) {
  echo "hello";
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  if ($password == $cpassword) {
    $query1 = "select * from patreg where email='$email';";
    $result1 = $GLOBALS['conn']->query($query1);
    if ($result1->num_rows == 0) {
      // while ($row = $result1->fetch_array()) {

      //   $_SESSION['pid'] = $row['pid'];
      // }
    $query = "insert into patreg(fname,lname,gender,email,contact,password,cpassword) values ('$fname','$lname','$gender','$email','$contact','$password','$cpassword');";
    $result = $conn->query($query);
    if ($result == TRUE) {
      $_SESSION['username'] = $_POST['fname'] . " " . $_POST['lname'];
      $_SESSION['fname'] = $_POST['fname'];
      $_SESSION['lname'] = $_POST['lname'];
      $_SESSION['gender'] = $_POST['gender'];
      $_SESSION['contact'] = $_POST['contact'];
      $_SESSION['email'] = $_POST['email'];
      $query3 = "select * from patreg where email='$email';";
      $result3 = $GLOBALS['conn']->query($query3);
       while ($row = $result3->fetch_array()) {

        $_SESSION['pid'] = $row['pid'];
      }
      // header("Location:patient-panel.php");
      echo("<script>alert('Registerd successfully!');
      window.location.href = 'patient-panel.php';</script>");
    }
  }
  else{
    echo("<script>alert('User already exist. Try Again!');
        window.location.href = 'form.html';</script>");
  }

  } else {
    header("Location:error1.php");
  }
}
