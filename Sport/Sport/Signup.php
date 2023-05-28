<?php
session_start();
include('Connect.php');
error_reporting(0);
if(isset($_POST['click'])){
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $no = $_POST['number'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $status = 1;
    $SQL = "INSERT INTO `student`(`Name`, `Email`, `Phone number`, `Password`, `Confirm password`, `status`) VALUES ('$username','$email','$no','$pass','$cpass','$status')";
    $query= mysqli_query($conn,$SQL);
    $last = mysqli_insert_id($conn);

    echo "<script>alert('You have successfully registerd your Id is $last');</script>";

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup page for user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
 <!-- ------------------------NAVBAR--------------------------- -->
 <nav class="navbar navbar-expand-lg bg-body-tertiary bg-secondary bg-gradient">
        <div class="container">
            <a class="navbar-brand" href="Signup.php">Sports Management System</a>
        </div>
    </nav>


    <!-- -------------------- ------------------OPTIONS OF NAVBAR------------------------------------------- -->
    <ul class="nav nav-tabs container justify-content-end my-4">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Adminlogin.php">ADMIN LOGIN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Studentlogin.php">STUDENT LOGIN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Signup.php">SIGNUP</a>
        </li>

    </ul>



        <div class="d-flex justify-content-center align-items-center my-5">
        <span class="border border-secondary border-2 rounded bg-light bg-gradient">
            <form method="post" class="my-5 mx-5" onsubmit="return check()">
                <p class="text-center fs-4">SIGNUP FORM</p>
                <div class="mb-3">
                    <label class="form-label">Name<sup style="color:red;">*</sup></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        style="width: 400px;"  autocomplete="off" name="uname" required />
                </div>

                <div class="mb-3">
                    <label class="form-label">Email<sup style="color:red;">*</sup></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        style="width: 400px;"  autocomplete="off" name="email" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone number<sup style="color:red;">*</sup></label>
                    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        style="width: 400px;"  autocomplete="off" name="number" pattern="[0-9]{10}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password<sup style="color:red;">*</sup></label>
                    <input type="password" class="form-control" id="pass" style="width: 400px"
                        autocomplete="off" name="pass" required />
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password<sup style="color:red;">*</sup></label>
                    <input type="password" class="form-control" id="cpass" style="width: 400px"
                        autocomplete="off" name="cpass" required />
                </div>
                <input type="submit" class="btn btn-primary" style="margin: auto; display: block" name="click" value="Signup" />
            </form>
        </span>
    </div>

</body>
</html>

<script>

    function check(){
        var pass = document.getElementById('pass').value;
        var cpass = document.getElementById('cpass').value;
        if(pass != cpass){
            alert("Password doesn't match with confirm password");
            return false;
        }
        else{
            alert("Signup successfully");
            document.location = 'Studentlogin.php';
        }
    }
    </script>


<?php
session_start();
include('Connect.php');
error_reporting(0);
if(isset($_POST['click'])){
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $no = $_POST['number'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $status = 1;
    $SQL = "INSERT INTO `student`(`Name`, `Email`, `Phone number`, `Password`, `Confirm password`, `status`) VALUES ('$username','$email','$no','$pass','$cpass','$status')";
    $query= mysqli_query($conn,$SQL);

}

?>