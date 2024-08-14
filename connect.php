<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="myhmsdb";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
        echo "<script>alert('Something went wrong! sorry for the inconveience.');</script>";
    }
?>