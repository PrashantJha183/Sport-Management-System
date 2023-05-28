<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
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

        <div class="float-end"><a href="Studentlogin.php"><button type="button" class="btn btn-danger"
                    style="margin-right: 55px;">Logout</button></a></div>
        <br>
    </nav>


    <ul class="nav nav-tabs container justify-content-end my-4">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="StudentDashboard.php">DASHBOARD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ViewTrainer.php">View Trainer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Viewsession.php">Session</a>
        </li>
    </ul>
    <div class="container">
        <p class="fs-4">STUDENT DASHBOARD</p>

    </div>

    <!-- ------------------------------CONTENT OF DASHBOARD PAGE------------------------------ -->
    <div class="d-flex justify-content-center align-items-center my-2">
        <p class="text-center fs-1 my-5">WELCOME TO<br />SPORTS MANAGEMENT SYSTEM</p>
    </div>



    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="Cricket.jpg" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="Football.jpg" class="d-block w-50" style="height: 350px;" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="tt.webp" class="d-block w-50" style="height: 350px;" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</body>

</html>


<?php
include('Connect.php');

?>