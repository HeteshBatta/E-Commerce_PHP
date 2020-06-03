<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/common.css">
    <title>Signup</title>
</head>
<body style="margin:0px">
    <?php
    include "include/header.inc.php";
    ?>

    <div class="container">
        <div style= "text-align:left; font-size: 30px; margin-top: 64px;">
            <p><strong>SIGN UP</strong></p>
        </div>

        <form class="form-horizontal" method="post" action="include/UserSignUp.inc.php">
            <div class="form-group">
            <br><p style="color: red;text-align: center;"><?php if(isset($_GET['error'])) { echo $_GET['error']; } ?></p><br>
                <label for="Fullname">Name</label>
                <input type="text" class="form-control" id="Fullname" name="Fullname" placeholder="Enter Name" required>
            </div>
            
            <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter Email" required>
            </div> 

            <div class="form-group">
                <label for="Pwd">Password</label>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
            </div> 

            <div class="form-group">
                <label for="Mobile">Mobile Number</label>
                <input type="number" min="6000000000" max="9999999999" class="form-control" id="MobileNo" name="MobileNo" placeholder="Enter Mobile Number" required>
            </div>
            
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Address" required>
            </div>  

            <div class="form-group">
                <label for="Gender">Select Gender</label>
                <select class="form-control" id="Gender" name="Gender" required> 
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success" name="submitUserSignUp">Submit</button>
            <br><br>
            <p><strong>Already a member    </strong><a href="/E-Commerce"><u>Click Here</u></a></p>
            
        </form>



    </div>
</body>
</html>