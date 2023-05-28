<?php

include('Connect.php');

if (isset($_POST['click'])) {
    $tname = $_POST['tname'];
    $cat = $_POST['cat'];
    $status = 0;
    $sid = $_POST['id'];
    $sname = $_POST['sname'];
    $date = $_POST['date'];
    $sql = "INSERT INTO `session`(`Trainername`, `Category`, `Student Id`, `Student name`,`status`,`Date and Time`) VALUES ('$tname','$cat','$sid','$sname','$status','$date')";
    $run = mysqli_query($conn, $sql);
    echo '<script>alert("hii")</script>';
    header('location:Allocatesession.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allocate session page for admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <style>
        .carousel-inner img {
            margin: auto;
        }
    </style>
</head>

<body>

    <!-- ------------------------NAVBAR--------------------------- -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="Index.php">Sports Management System</a>
        </div>

        <div class="float-end"><a href="Adminlogin.php"><button type="button" class="btn btn-danger"
                    style="margin-right: 55px;">Logout</button></a></div>
        <br>
    </nav>


    <ul class="nav nav-tabs container justify-content-end my-4">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Dashboard.php">DASHBOARD</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">CATEGORY</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Addcateogary.php">ADD CATEGORY</a></li>
                <li><a class="dropdown-item" href="ManageCategory.php">MANAGE CATEGORY</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">TRAINER</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Addtrainer.php">ADD TRAINER</a></li>
                <li><a class="dropdown-item" href="#">MANAGE TRAINER</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Regstud.php" tabindex="-1" aria-disabled="true">STUDENT</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">SESSION</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Allocatesession.php">ALLOCATE SESSION</a></li>
                <li><a class="dropdown-item" href="Managesession.php">MANAGE SESSION</a></li>
            </ul>
        </li>
    </ul>

    <div class="container">
        <p class="f-4">ALLOCATE SESSION</p>
    </div>

    <div class="d-flex justify-content-center align-items-center my-5">
        <span class="border border-secondary border-2 rounded bg-light bg-gradient">
            <form method="post" class="my-5 mx-5">
                <p class="text-center fs-4">ALLOCATE SESSION</p>
                <div class="mb-3">
                    <label> TRAINER NAME<span style="color:red;">*</span></label>
                    <select class="form-control" name="tname" required="required" style="width: 500px;">
                        <option> Select Trainer name</option>
                        <?php
                        include('Connect.php');
                        $run = "SELECT * FROM `trainer`";
                        $SQL = mysqli_query($conn, $run);
                        $results = mysqli_fetch_all($SQL);
                        $cnt = 1;
                        if (mysqli_num_rows($SQL) > 0) {
                            foreach ($SQL as $know) { ?>
                                <option>
                                    <?php echo htmlentities($know['Trainername']); ?>
                                </option>
                            <?php }
                        } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label> CATEGORY<span style="color:red;">*</span></label>
                    <select class="form-control" name="cat" required="required">
                        <option> Select category</option>
                        <?php
                        include('Connect.php');
                        $run = "SELECT * FROM `cateogary`";
                        $SQL = mysqli_query($conn, $run);
                        $results = mysqli_fetch_all($SQL);
                        $cnt = 1;
                        if (mysqli_num_rows($SQL) > 0) {
                            foreach ($SQL as $know) { ?>
                                <option>
                                    <?php echo htmlentities($know['name']); ?>
                                </option>
                            <?php }
                        } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label> STUDENT ID<span style="color:red;">*</span></label>
                    <select class="form-control" name="id" required="required">
                        <option> Select Student Id</option>
                        <?php
                        include('Connect.php');
                        $run = "SELECT * FROM `student`";
                        $SQL = mysqli_query($conn, $run);
                        $results = mysqli_fetch_all($SQL);
                        $cnt = 1;
                        if (mysqli_num_rows($SQL) > 0) {
                            foreach ($SQL as $know) { ?>
                                <option>
                                    <?php echo htmlentities($know['Id']); ?>
                                </option>
                            <?php }
                        } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label> STUDENT NAME<span style="color:red;">*</span></label>
                    <select class="form-control" name="sname" required="required">
                        <option> Select Student name</option>
                        <?php
                        include('Connect.php');
                        $run = "SELECT * FROM `student`";
                        $SQL = mysqli_query($conn, $run);
                        $results = mysqli_fetch_all($SQL);
                        $cnt = 1;
                        if (mysqli_num_rows($SQL) > 0) {
                            foreach ($SQL as $know) { ?>
                                <option>
                                    <?php echo htmlentities($know['Name']); ?>
                                </option>
                            <?php }
                        } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">DATE AND TIME <span style="color:red;">*</span></label>
                    <input type="datetime-local" class="form-control" id="exampleInputPassword1" style="width: 400px"
                        autocomplete="off" name="date" required />
                </div>


                <input type="submit" class="btn btn-primary" style="margin: auto; display: block" name="click" />
            </form>
            </form>
        </span>
    </div>


</body>

</html>