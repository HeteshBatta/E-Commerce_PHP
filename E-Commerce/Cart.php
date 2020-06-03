<?php

session_start();
if($_SESSION['ISLOGGEDIN']!="YES")
{
    header('Location: /E-Commerce/index.php'); 
}

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
    <link rel="stylesheet" href="css/table.css">
    <title>Checkout</title>
    <script>
        function myfunction(event)
        {
            var item = event.target.parentNode.parentNode.childNodes[0].innerHTML;
            var req = new XMLHttpRequest();
            req.onreadystatechange = function()
            {
                if(this.readyState == 4 && this.status==200)
                {
                    window.location.reload(1);
                }
            }
            req.open("GET" , "/E-Commerce/removeitem.php?name="+item,true);
            req.send();
        }
    </script>
</head>
<body style="margin:0px">
    <?php
    include "include/header3.inc.php";
    ?>

    <div class="container">
        <div style= "text-align:center; font-size: 30px; margin-top: 64px;">
                <p><strong>Checkout Page</strong></p>
        </div>
        <table id="customers">
        <tr>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Quantity</th>
            <th>Remove one</th>
        </tr>
         
        <?php 
        include "include/checkout.php";

        echo "</table> <br> <br>";
       
        echo "<p id=bill>Your total Bill is Rs. " . $total . "/-.</p>";
        ?>
    </div>
    
</body>
</html>