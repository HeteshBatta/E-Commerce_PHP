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
    <link rel="stylesheet" href="css/product.css">
    <title>Products</title>

    <script>
        function AddToCart(str)
        {
            var res = str.split("\n");
            var item = res[0];

            var req = new XMLHttpRequest();
            req.onreadystatechange = function()
            {
                if(this.readyState == 4 && this.status==200)
                {
                    alert(this.responseText);
                }
            }
            req.open("GET" , "additem.php?name="+item,true);
            req.send();
        }
    </script>

</head>
<body style="margin:0px">
    <?php
    include "include/header2.inc.php";
    ?>

    <div class="container">
    <div style= "text-align:center; font-size: 30px; margin-top: 64px;">
            <p><strong>Products</strong></p>
    </div>

        <div class = "grid-container">

            <?php
            include "include/dbconnect.inc.php";

            $sql = "SELECT * FROM Products";
            $result = mysqli_query($conn , $sql);
            $resultcheck = mysqli_num_rows($result);

            while($rows = mysqli_fetch_assoc($result))
            {
                if($rows['Quantity'] > 0)
                {
            ?>

            <div class = "Big">
                    <div class = "Pic">
                    <img class = "picture" src="images/<?php echo $rows['ProdImage']; ?>">
                    </div>
                    <div class = "Price">
                    <div id ="name"><strong><?php echo $rows['Productname']; ?></strong></div>
                    <p>Price: <strong><?php echo $rows['Price']; ?></strong></p>
                    </div>
                    <div class = "btn">
                        <button onclick=AddToCart(event.target.parentNode.parentNode.innerText) class="btn btn-primary">Add to cart</button>
                    </div>
            </div>

            <?php
                }
                else
                {
            ?>

            <div class = "Big">
                <div class = "Pic">
                    <img class = "picture" src="images/<?php echo $rows['ProdImage']; ?>">
                </div>
                <div class = "Price">
                    <div id ="name"><strong><?php echo $rows['Productname']; ?></strong></div>
                    <p>Price: <strong><?php echo $rows['Price']; ?></strong></p>
                </div>
                <div class = "btn">
                        <button class="btn btn-light">Out Of Stock</button>
                </div>
            </div>
            <?php
                }
            }
            ?>

        </div>  



    </div>
    
</body>
</html>