<?php
// include "connection.php";
// if(!($_SESSION['userLogin'] != '')){
//     header("Location:login.php");
//     die();
// }else{
//     session_start();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit Profile</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- CSS -->
    <style type="text/css">
        .form-control {
            width: 250px;
            height: 38px;
        }

        form {
            padding-left: 640px;
        }

        label {
            font-size: 18px;
            font-weight: 600px;
            color: white;
        }
    </style>
</head>

<body style="margin-top: 8%; background-color: #2E7E44; ">

    <h2 style="text-align: center; color: #fff;"> Upload Notice</h2>

    <div class="profile_info" style="text-align: center;">
        <span style="color: white;"> Welcome To Bhawa's Academy Portal</span>
    </div><br>

    <div class="form1">
        <form action="" method="post" enctype="multipart/form-data">
            <label>
                <h5><b> Id: </b></h5>
            </label>
            <input class="form-control" type="text" name="Id" placeholder="Enter Id: " required>
            <!-- <label><h5><b> Date: </b></h5></label>
            <input class="form-control" type="date" name="date" placeholder="" required> -->
            <label>
                <h5><b> Title: </b></h5>
            </label>
            <input class="form-control" type="text" name="Title" required placeholder="Enter title: ">
            <label>
                <h5><b> Upload Notice: </b></h5>
            </label>
            <input class="form-control" type="text" name="Link" required placeholder="Enter file link: ">
            <!-- <input class="form-control" type="file" name="file"> -->
            <div style="margin-top: 20px; padding-left: 100px;">
                <button class="btn btn-default" type="submit" name="submit"> save </button>
            </div>
        </form>
    </div>
    <?php

    if (isset($_POST['submit'])) {

        $id = $_POST['Id'];
        // $date = $_POST['date'];
        $title = $_POST['Title'];
        $file = $_POST['Link'];


        $sql1 = "INSERT INTO `link set`(`Id`, `Title`, `Link`) VALUES ('$id','$title','$file'); ";

        if (mysqli_query($db, $sql1)) {
    ?>
            <script type="text/javascript">
                alert("Saved Successfully.");
                // window.location="login.php";
            </script>
    <?php
        }
    }

    ?>
</body>

</html>