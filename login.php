<?php
include "connection.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- CSS -->
    <style type="text/css">
        section {
            margin-top: -20px;
        }

        .box1 {
            color: white;
            width: 150%;
            height: 55vh;
            background-color: rgba(0, 0, 0, 0.5);
            margin: 0px auto;
            padding: 20px;
            transform: translateX(-75px);
            opacity: 0.9;
            border-radius: 20px;
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.5);
        }

        .bg-image {
            /* Blur Effect */
            margin-top: -20px;
            filter: blur(8px);
            -webkit-filter: blur(8px);
            /* Full Height */
            height: 93vh;
            width: 1536px;
            color: black;
            /* Center and scale the image nicely */
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        /* Position text in the middle of the page/image */
        .bg-text {
            color: white;
            font-weight: bold;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            border-radius: 20px;
        }

        label {
            font-size: 18px;
            font-weight: 600px;
        }

        @media screen and (max-width: 750px) {
            .box1 {
                color: white;
                height: 80%;
                width: 200%;
                background-color: rgba(0, 0, 0, 0.5);
                margin: 0px auto;
                padding: 20px;
                transform: translateY(50px);
                opacity: 0.9;
                border-radius: 20px;
                box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.5);
            }

            .bg-image {
                /* Blur Effect */
                filter: blur(8px);
                -webkit-filter: blur(8px);
                color: black;
                /* Center and scale the image nicely */
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: 100% 100%;
                border: 2px solid black;
                margin-left: -40%;
            }
        }
    </style>
</head>

<body style="background-color: #4cbfbd; overflow-X: hidden; color: white;">
    <section>
        <div class="bg-image"></div>
        <div class="bg-text">
            <div class="log_img">
                <br>
                <div class="box1">
                    <h1 style="text-align: center; font-size: 35px;">
                        Log in
                    </h1><br>
                    <form name="login" action="" method="post">
                        <label for="admin"> Admin </label>

                        <div class="login">
                            <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
                            <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
                            <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; 
                        width: 70px; height: 30px;">
                        </div>
                        <p style="color: white; padding-left: 15px;">
                            <br><br>
                            &nbsp; &nbsp; &nbsp; &nbsp;
                            Forgot Password?
                            <a style="color: cyan; text-decoration: none;" href="#">Contact Developer!</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (isset($_POST['submit'])) {
        $count = 0;
        $res = mysqli_query($db, "SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");

        $row = mysqli_fetch_assoc($res);

        $count = mysqli_num_rows($res);

        if ($count == 0) {
    ?>
            <div class="alert alert-danger" style="width: 700px; margin-left: 420px; margin-top: -50px;
                background-color: #ec0d0d; color: white;">
                <strong> This username or password doesn't matched. </strong>
            </div>
        <?php
        } else {
            // -------------- If username and password matches ------------

            $_SESSION['login_user'] = $_POST['username'];
            $_SESSION['username'] == '';
            $_SESSION['userLogin'] = "Loggedin";

        ?>
            <script type="text/javascript">
                window.location = "upload_notice.php"
            </script>
    <?php
        }
    }
    ?>
</body>

</html>