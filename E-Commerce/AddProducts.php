<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/common.css">
    <title>Add Products</title>
</head>
<body style="margin:0px">
    <?php
    include "include/header.inc.php";
    ?>

    <div class="container">
        <div style= "text-align:left; font-size: 30px; margin-top: 64px;">
            <p><strong>Add Products</strong></p>
        </div>

        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="include/AddProducts.inc.php">
            <div class="form-group">
                <label for="Fullname">Product Name</label>
                <input type="text" class="form-control" id="productname" name="productname" placeholder="Enter Product Name">
            </div>

            <div class="form-group">
                <label for="Pwd">Product Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price">
            </div> 

            <div class="form-group">
                <label for="Mobile">Product Quantity</label>
                <input type="number" class="form-control" id="Quantity" name="Quantity" placeholder="Enter Quantity">
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="Prodimage">Image:</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="prodimage" name="prodimage" >
              </div>
            </div> 

            <button type="submit" class="btn btn-success" name="AddProducts">Submit</button>
            <br><br>
            
        </form>



    </div>
</body>
</html>