<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer adding page for admin</title>
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
                <li><a class="dropdown-item" href="ManageTrainer.php">MANAGE TRAINER</a></li>
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
        <p class="fs-4">ADD TRAINER</p>
    </div>


    <div class="d-flex justify-content-center align-items-center my-5">
        <span class="border border-secondary border-2 rounded bg-light bg-gradient">
            <form method="post" class="my-5 mx-5">
                <p class="text-center fs-4">TRAINER INFO</p>
                <div class="mb-3">
                    <label class="form-label">Trainer Name<sup style="color:red;">*</sup></label>
                    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        style="width: 400px;" max="10" autocomplete="off" name="tname" required />
                </div>




                <div class="mb-3">
                    <label> Category<span style="color:red;">*</span></label>
                    <select class="form-control" name="category" required="required">
                        <option> Select Category</option>
                        <?php
                        include ('Connect.php');
                        $run = "SELECT * FROM `cateogary`";
                        $SQL = mysqli_query($conn, $run);
                        $results = mysqli_fetch_all($SQL);
                        $cnt = 1;
                        if (mysqli_num_rows($SQL) > 0) {
                            foreach ($SQL as $know) { ?>
                                <option><?php echo htmlentities($know['name']); ?></option>
                            <?php }
                        } ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" style="margin: auto; display: block" name="click" />
            </form>
        </span>
    </div>


</body>

</html>


<?php
// session_start();
error_reporting(0);
include('Connect.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:Adminlogin.php');
} else {
    

    if(isset($_POST['click'])){
        $tname = $_POST['tname'];
        $cat = $_POST['category'];
        $status = 1;
        $sql = "INSERT INTO `trainer`(`Trainername`, `Category`,`Status`) VALUES ('$tname','$cat','$status')";
        $query = mysqli_query($conn,$sql);
        $last = mysqli_insert_id($conn);
        if($last){
            echo'<script>alert("Trainer added successfully")</script>';
            header('location:AddTrainer.php');
            exit;
        }
        else{
            echo'<script>alert("Trainer unadded")</script>';
        }
    }
}




?>