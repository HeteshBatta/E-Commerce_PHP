<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/common.css">
    <title>LOG IN</title>
</head>
<body style="margin:0px">
    <?php
    include "include/header.inc.php";
    ?>

    <div class="container">

        <div style= "text-align:left; font-size: 30px; margin-top: 64px;">
            <p><strong>LOG-IN</strong></p>
        </div>

        <form class="form-horizontal" method="post" action="include/UserLogin.inc.php">
            <div class="form-group">
                <br><p style="color: red;text-align: center;"><?php if(isset($_GET['error'])) { echo $_GET['error']; } ?></p><br>
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="loginemail" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">          
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="loginpwd" required>
                </div>
            </div>
            <br><br>
            <button type="submit" class="btn btn-success" name="UserLogin">Submit</button>
            <br><br>
            <p><strong>Not Registered    </strong><a href="/E-Commerce/Signup.php"><u>Click Here</u></a></p>
        </form>
    </div>

</body>
</html>