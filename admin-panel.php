<!DOCTYPE html>
<?php
include('connect.php');

include('newfunc.php');

if (isset($_POST['docsub'])) {
  $doctor = $_POST['doctor'];
  $dpassword = $_POST['dpassword'];
  $cdpassword = $_POST['cdpassword'];
  $demail = $_POST['demail'];
  $spec = $_POST['special'];
  $docFees = $_POST['docFees'];
  if ($dpassword == $cdpassword) {
    $query1 = "select * from doctb where email='$demail';";
    $result1 = $GLOBALS['conn']->query($query1);
    if ($result1->num_rows == 0) {
      $query = "insert into doctb(username,password,email,spec,docFees)values('$doctor','$dpassword','$demail','$spec','$docFees')";
      $result = $conn->query($query);
      if ($result == TRUE) {
        echo "<script>alert('Doctor added successfully!');</script>";
      }
    } else {
      echo ("<script>alert('User already exist. Try Again!');
          window.location.href = 'admin-panel.php';</script>");
    }
  } else {
    echo "<script>alert('Password not matched');</script>";
  }
}
if (isset($_POST['docsub1'])) {
  $demail = $_POST['demail'];
  $query = "delete from doctb where email='$demail';";
  $result = $GLOBALS['conn']->query($query);
  if ($result == TRUE) {
    echo "<script>alert('Doctor removed successfully!');</script>";
  } else {
    echo "<script>alert('Unable to delete!');</script>";
  }
}


?>
<html lang="en">

<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #2596be;">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Hospital Appointment Booking System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <script>
      var check = function() {
        if (document.getElementById('dpassword').value ==
          document.getElementById('cdpassword').value) {
          document.getElementById('message').style.color = '#5dd05d';
          document.getElementById('message').innerHTML = 'Matched';
        } else {
          document.getElementById('message').style.color = '#f55252';
          document.getElementById('message').innerHTML = 'Not Matching';
        }
      }

      function alphaOnly(event) {
        var key = event.keyCode;
        return ((key >= 65 && key <= 90) || key == 8 || key == 32);
      };
    </script>

    <style>
      .bg-primary {
        background-color: #2596be;
      }

      .col-md-4 {
        max-width: 20% !important;
      }

      .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #2596be;
        border-color: #007bff;
      }

      .text-primary {
        color: #342ac1 !important;
      }

      #cpass {
        display: -webkit-box;
      }

      #list-app {
        font-size: 15px;
      }

      .btn-primary {
        background-color: #2596be;
      }

      a {
        color: #41ff00;
      }
    </style>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>
    </div>
  </nav>
</head>
<style type="text/css">
  button:hover {
    cursor: pointer;
  }

  #inputbtn:hover {
    cursor: pointer;
  }
</style>

<body style="padding-top:50px;">
  <div class="container-fluid" style="margin-top:50px;">
    <h3 style="margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;"> WELCOME ADMIN </h3>
    <div class="row">
      <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
          <a class="list-group-item list-group-item-action" href="#list-doc" id="list-doc-list" role="tab" aria-controls="home" data-toggle="list">Doctor List</a>
          <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list" role="tab" data-toggle="list" aria-controls="home">Patient List</a>
          <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list" role="tab" data-toggle="list" aria-controls="home">Appointments</a>
          <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list" role="tab" data-toggle="list" aria-controls="home">Add Doctor</a>
          <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-ddoc-list" role="tab" data-toggle="list" aria-controls="home">Delete Doctor</a>


        </div><br>
      </div>
      <div class="col-md-8" style="margin-top: 3%;">
        <div class="tab-content" id="nav-tabContent" style="width: 950px;">



          <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
            <div class="container-fluid container-fullw bg-white">
              <div class="row">
                <div class="col-sm-4" style="-ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 30%;
    background: #c0d3ff4d;
    border-radius: 15px;
    margin: 14px;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Doctor List</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script>
                      <p class="links cl-effect-1">
                        <a href="#list-doc" style="color: blue;" onclick="clickDiv('#list-doc-list')">
                          View Doctors
                        </a>
                      </p>
                    </div>
                  </div>
                </div>



                <div class="col-sm-4" style="-ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 30%;
    background: #c0d3ff4d;
    border-radius: 15px;
    margin: 14px;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Patient List</h4>

                      <p class="cl-effect-1">
                        <a href="#app-hist" style="color: blue;" onclick="clickDiv('#list-pat-list')">
                          View Patients
                        </a>
                      </p>
                    </div>
                  </div>
                </div>


                <div class="col-sm-4" style="-ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 30%;
    background: #c0d3ff4d;
    border-radius: 15px;
    margin: 14px;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Appointment List</h4>
                        
                      <p class="cl-effect-1">
                        <a href="#app-hist" style="color: blue;" onclick="clickDiv('#list-app-list')">
                        view Appointments
                        </a>
                      </p>
                    </div>
                  </div>
                </div>





               


                <div class="col-sm-4" style="-ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 30%;
    background: #c0d3ff4d;
    border-radius: 15px;
    margin: 14px;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Manage Doctors</h4>

                      <p class="cl-effect-1">
                        <a href="#app-hist" style="color: blue;" onclick="clickDiv('#list-adoc-list')">Add Doctors</a>
                        &nbsp|
                        <a href="#app-hist" style="color: blue;" onclick="clickDiv('#list-ddoc-list')">
                          Delete Doctors
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>




            </div>
          </div>









          <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-home-list">


            <div class="col-md-8">
            </div>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Doctor Name</th>
                  <th scope="col">Specialization</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                  <th scope="col">Fees</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "select * from doctb";
                $result = $GLOBALS['conn']->query($query);
                while ($row = $result->fetch_assoc()) {
                  $username = $row['username'];
                  $spec = $row['spec'];
                  $email = $row['email'];
                  $password = $row['password'];
                  $docFees = $row['docFees'];

                  echo "<tr>
                        <td>$username</td>
                        <td>$spec</td>
                        <td>$email</td>
                        <td>$password</td>
                        <td>$docFees</td>
                      </tr>";
                }

                ?>
              </tbody>
            </table>
            <br>
          </div>


          <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-app-list">
        
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Patient ID</th>
              <th scope="col">Appointment ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Doctor</th>
              <th scope="col">Appointment Date</th>
              <th scope="col">Appointment Time</th>

            </tr>
          </thead>
          <tbody>
            <?php 
             
    
              $query = "select pid,ID,fname,lname,gender,email,contact,doctor,appdate,apptime from appointmenttb;";
              $result=$GLOBALS['conn']->query($query);
              while ($row=$result->fetch_assoc()){
                ?>
                <tr>
                <td><?php echo $row['pid'];?></td>
                  <td><?php echo $row['ID'];?></td>
                  <td><?php echo $row['fname'];?></td>
                  <td><?php echo $row['lname'];?></td>
                  <td><?php echo $row['gender'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['contact'];?></td>
                  <td><?php echo $row['doctor'];?></td>
                  <td><?php echo $row['appdate'];?></td>
                  <td><?php echo $row['apptime'];?></td>
                

    
                </tr></a>
              <?php } ?>
          </tbody>
        </table>
  <br>
</div>












          <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">

            <div class="col-md-8">
            </div>

            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Patient ID</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Email</th>
                  <th scope="col">Contact</th>
                  <!-- <th scope="col">Password</th> -->
                </tr>
              </thead>
              <tbody>
                <?php

                $query = "select * from patreg";
                $result = $GLOBALS['conn']->query($query);
                while ($row = $result->fetch_assoc()) {
                  $pid = $row['pid'];
                  $fname = $row['fname'];
                  $lname = $row['lname'];
                  $gender = $row['gender'];
                  $email = $row['email'];
                  $contact = $row['contact'];
                  // $password = $row['password'];

                  echo "<tr>
                        <td>$pid</td>
                        <td>$fname</td>
                        <td>$lname</td>
                        <td>$gender</td>
                        <td>$email</td>
                        <td>$contact</td>
            
                      </tr>";
                }

                ?>
              </tbody>
            </table>
            <br>
          </div>





          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

          <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            <form class="form-group" method="post" action="admin-panel.php">
              <div class="row">
                <div class="col-md-4"><label>Doctor Name:</label></div>
                <div class="col-md-8"><input type="text" class="form-control" name="doctor" onkeydown="return alphaOnly(event);" required></div><br><br>
                <div class="col-md-4"><label>Specialization:</label></div>
                <div class="col-md-8">
                  <select name="special" class="form-control" id="special" required="required">
                    <option value="head" name="spec" disabled selected>Select Specialization</option>
                    <option value="General" name="spec">General</option>
                    <option value="Cardiologist" name="spec">Cardiologist</option>
                    <option value="Neurologist" name="spec">Neurologist</option>
                    <option value="Pediatrician" name="spec">Pediatrician</option>
                  </select>
                </div><br><br>
                <div class="col-md-4"><label>Email ID:</label></div>
                <div class="col-md-8"><input type="email" class="form-control" name="demail" required></div><br><br>
                <div class="col-md-4"><label>Password:</label></div>
                <div class="col-md-8"><input type="password" class="form-control" onkeyup='check();' name="dpassword" id="dpassword" required></div><br><br>
                <div class="col-md-4"><label>Confirm Password:</label></div>
                <div class="col-md-8" id='cpass'><input type="password" class="form-control" onkeyup='check();' name="cdpassword" id="cdpassword" required>&nbsp &nbsp<span id='message'></span> </div><br><br>


                <div class="col-md-4"><label>Consultancy Fees:</label></div>
                <div class="col-md-8"><input type="text" class="form-control" name="docFees" required></div><br><br>
              </div>
              <input type="submit" name="docsub" value="Add Doctor" class="btn btn-primary">
            </form>
          </div>

          <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">
            <form class="form-group" method="post" action="admin-panel.php">
              <div class="row">

                <div class="col-md-4"><label>Email ID:</label></div>
                <div class="col-md-8"><input type="email" class="form-control" name="demail" required></div><br><br>

              </div>
              <input type="submit" name="docsub1" value="Delete Doctor" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
            </form>
          </div>


          <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>





        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
</body>

</html>