<?php
session_start();
error_reporting(0);
include('Connect.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:Adminlogin.php');
} else {

    if (isset($_GET['inid'])) {
        $id = $_GET['inid'];
        $status = 0;
        $sql = "UPDATE `trainer` SET `Status`= '$status'  WHERE `Id`= '$id'";
        $query = mysqli_query($conn, $sql);
        echo "<script>alert('Active to Inactive');</script>";
        mysqli_close($conn);

        header('location:ManageTrainer.php');
        exit;
    }



    //code for active students
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $status = 1;
        $sql = "UPDATE `trainer` SET `Status`= '$status'  WHERE `Id`= '$id'";
        $query = mysqli_query($conn, $sql);
        echo "<script>alert('Inactive to active');</script>";
        mysqli_close($conn);

        header('location:ManageTrainer.php');
        exit;
    }

}

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
            <a class="nav-link active" href="Regstud.php" tabindex="-1" aria-disabled="true">STUDENT</a>
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
        <p class="fs-4">MANAGE TRAINER</p>
    </div>






    <div class="container">

<form method="post">
    <table class="table table-secondary table-striped table-bordered border-dark table-hover">
        <thead class="table table-dark">
            <tr>
                <!-- <th scope="col">#</th> -->
                <th scope="col">Id</th>
                <th scope="col">Trainer Name</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('Connect.php');
            $sql = "SELECT * FROM `trainer`";
            $result = mysqli_query($conn, $sql);
            $run = mysqli_fetch_all($result);
            $cnt = 1;
            if (mysqli_num_rows($result) > 0) {
                foreach ($result as $know) {
                    ?>

                    <tr class="odd gradeX">
                        <!-- <td class="center">
                            <?php echo htmlentities($cnt); ?>
                        </td> -->
                        <td class="center">
                            <?php echo htmlentities($know['Id']); ?>
                        </td>
                        <td class="center">
                            <?php echo htmlentities($know['Trainername']); ?>
                        </td>
                        <td class="center">
                            <?php echo htmlentities($know['Category']); ?>
                        </td>
                        <td class="center">
                            <?php if ($know['Status'] == 1) {
                                echo htmlentities("Active");
                            } else {
                                echo htmlentities("Inactive");
                            }

                            ?>
                        </td>


                        <td class="center">

                                        <?php
                                    if ($know['Status'] == 0) { ?>
                                        <a href="ManageTrainer.php?id=<?php echo htmlentities($know['Id']);?>"
                                           ><button
                                                type="button" class="btn btn-success" >Active</button>


                                        <?php } else { ?>
                                                <a href="ManageTrainer.php?inid=<?php echo htmlentities($know['Id']); ?>"
                                                ><button
                                                    type="button" class="btn btn-danger">Inactive</button>

                                                    <?php } ?>







                        </td>

                    </tr>



                    <?php $cnt = $cnt + 1;

                }
            }
            ?>




        </tbody>
    </table>
</form>
</div>


</body>

</html>