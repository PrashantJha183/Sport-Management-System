<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Trainer page for student</title>
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
        <p class="fs-4">TRAINER</p>

    </div>



    <div class="container">
        <form method="post">
            <table class="table table-secondary table-striped table-bordered border-dark table-hover">
                <thead class="table table-dark">
                    <tr>
                        <!-- <th scope="col">#</th> -->
                        <!-- <th scope="col">Id</th> -->
                        <th scope="col">Trainer Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Status</th>
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
                                    <?php echo htmlentities($know['Trainername']); ?>
                                </td>
                                <td class="center">
                                    <?php echo htmlentities($know['Category']); ?>
                                </td>
                                <td class="center">
                                    <?php if ($know['Status'] == 1) {
                                        echo htmlentities("Active");
                                    } else {
                                        echo htmlentities("Blocked");
                                    }

                                    ?>
                                </td>

                            </tr>



                            <?php $cnt = $cnt + 1;

                        }
                    }
                    ?>
    </div>

</body>

</html>