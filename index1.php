<!-- <html>

<head>
    <title>Hospital Appointment Booking System</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <script>
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('cpassword').value) {
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

        function checklen() {
            var pass1 = document.getElementById("password");
            if (pass1.value.length < 6) {
                alert("Password must be at least 6 characters long. Try again!");
                return false;
            }
        }
    </script>

</head>

<body>
    <div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
        <div class="row">
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 28%;">
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading" style="margin-bottom:4%;">Login as Doctor</h3>
                        <form method="post" action="doctor.php">
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <div class="form-group col-md-10">
                                        <label style="margin-left:60px;">User Name:</label>
                                        <input type="text" class="form-control" style="margin-left:60px;" name="username3" onkeydown="return alphaOnly(event);" required />
                                    </div>

                                    <div class="form-group col-md-10">
                                        <label style="margin-left:60px;">Password:</label>
                                        <input type="password" class="form-control" style="margin-left:60px;" name="password3" required />
                                    </div>

                                    <input type="submit" class="btnRegister" style="margin-top: 2rem;" name="docsub1" value="Login" />
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading" style="margin-bottom:4%;">Login as Admin</h3>
                        <form method="post" action="admin.php">
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <div class="form-group col-md-10">
                                        <label style="margin-left:60px;">Username:</label>
                                        <input type="text" class="form-control" name="username1" style="margin-left:60px;" onkeydown="return alphaOnly(event);" required />
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label style="margin-left:60px;">Password:</label>
                                        <input type="password" class="form-control" style="margin-left:60px;" name="password2" required />
                                    </div>

                                    <input type="submit" class="btnRegister" style="margin-top: 2rem;" name="adsub" value="Login" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</html> -->


<!DOCTYPE html>
<html>

<head>
    <title>Hospital Appointment Booking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        /* CSS Reset */
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'IBM Plex Sans', sans-serif;
            background-color: #4d84e2;
        }

        .register {
            background: #fff;
            padding: 3%;
            margin-top: 5%;
            border-radius: 1.5rem;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            width: 35%;
            height: 80%;
        }

        .register-right {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .register-heading {
            text-align: center;
            margin-bottom: 2rem;
            color: black;
            font-weight: bold;
            font-size: 40px;
        }

        .nav-tabs {
            border-bottom: none;
            margin-bottom: 2rem;
            gap: 20px;
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px;
            width: 400px;
            font-size: large;
        }

        .nav-tabs .nav-link {
            border: none;
            border-radius: 1.5rem;
            color: #6c757d;
            padding: 0.5rem 1rem;
            background-color: #e9ecef;
            transition: background-color 0.3s ease-in-out;
        }

        .nav-tabs .nav-link.active {
            background-color: #007bff;
            color: #fff;
        }

        .form-control {
            border-radius: 1.5rem;
            border: 1px solid #ced4da;
            padding: 1.5rem 1rem;
            margin-bottom: 1rem;

            transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btnRegister {
            display: block;
            margin: 1rem auto;
            width: 50%;
            max-width: 200px;
            border-radius: 1.5rem;
            padding: 0.75rem 1rem;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;

        }

        .btnRegister:hover {
            background-color: #0056b3;
        }

        label {
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5rem;
            font-weight: 700;
            font-size: larger;
            color: #495057;
            text-align: center;
            width: 80%;

        }

        .form-group {
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>

    <script>
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('cpassword').value) {
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

        function checklen() {
            var pass1 = document.getElementById("password");
            if (pass1.value.length < 6) {
                alert("Password must be at least 6 characters long. Try again!");
                return false;
            }
        }
    </script>

</head>

<body>
    <div class="container register">
        <div class="row justify-content-center">
            <div class="col-md-6 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="admin-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login as Doctor</h3>
                        <form method="post" action="doctor.php">
                            <div class="form-group">
                                <label>User Name:</label>
                                <input type="text" class="form-control" name="username3" onkeydown="return alphaOnly(event);" required />
                            </div>

                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" class="form-control" name="password3" required />
                            </div>

                            <input type="submit" class="btnRegister" name="docsub1" value="Login" />
                        </form>
                    </div>

                    <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                        <h3 class="register-heading">Login as Admin</h3>
                        <form method="post" action="admin.php">
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" class="form-control" name="username1" onkeydown="return alphaOnly(event);" required />
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" class="form-control" name="password2" required />
                            </div>

                            <input type="submit" class="btnRegister" name="adsub" value="Login" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>