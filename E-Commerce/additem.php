<?php

session_start();

$name = $_GET['name'];
$userid = $_SESSION['Id'];
include "./include/dbconnect.inc.php";
$sql="SELECT * FROM products WHERE Productname = '".$name."'";
$result = mysqli_query($conn,$sql);

while($rows = mysqli_fetch_assoc($result))
{
    $prodid = $rows['Id'];
    $quantity = $rows['Quantity'];
}

if($quantity == 0)
{
    echo 'Out of stock';
    exit();
}

$sql1 = "SELECT * from user_products where prodId = '".$prodid."' and userId = '".$userid."' ";
$result1 = mysqli_query($conn,$sql1);
$resultcheck = mysqli_num_rows($result1);
if($resultcheck == 0)
{
    //echo "For new entry";
    $sql = "INSERT INTO user_products (prodId,userId,prodname,quantity) VALUES ('$prodid', '$userid' , '$name' , '1')";
    if (mysqli_query($conn, $sql)) 
    {
        $newquantity = $quantity-1;
        $sql1 = "UPDATE products SET Quantity = '".$newquantity."' where Id = '".$prodid."' ";
		if (mysqli_query($conn, $sql1)) 
        {
           echo 'Item added to cart';
        }
        else 
        {
		    echo "Error: " . $sql . "" . mysqli_error($conn);
	    } 
    }
    else 
    {
		echo "Error: " . $sql1 . "" . mysqli_error($conn);
	} 
}
else
{
    //echo "For updating old entry";
    while($rows = mysqli_fetch_assoc($result1))
    {
        $Oldquantity = $rows['quantity'];
    }
    $newquantity = $Oldquantity+1;
    $sql = "UPDATE user_products SET quantity = '".$newquantity."' where prodId = '".$prodid."' and userId = '".$userid."' ";
    if (mysqli_query($conn, $sql)) 
    {
        $newquantity = $quantity-1;
        $sql1 = "UPDATE products SET Quantity = '".$newquantity."' where Id = '".$prodid."' ";
		if (mysqli_query($conn, $sql1)) 
        {
            echo 'Item added to cart';
        }
        else 
        {
		    echo "Error: " . $sql1 . "" . mysqli_error($conn);
	    } 
    }
    else 
    {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	} 
}

mysqli_close($conn);