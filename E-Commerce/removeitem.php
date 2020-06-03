<?php

session_start();

$name = $_GET['name'];
$userid = $_SESSION['Id'];
include "./include/dbconnect.inc.php";
$sql="SELECT * FROM user_products WHERE prodname = '".$name."' and userId = '".$userid."' ";
$result = mysqli_query($conn,$sql);

while($rows = mysqli_fetch_assoc($result))
{
    $quantity = $rows['quantity'];
    $prodid = $rows['prodid'];
}

$newquantity = $quantity - 1;

$sql1 = "UPDATE user_products SET quantity = '".$newquantity."' where prodname = '".$name."' and userid = '".$userid."' ";
if (mysqli_query($conn, $sql1)) 
{
    
}
$sql1 = "UPDATE products SET Quantity = Quantity+1 where Id = '".$prodid."' ";
if (mysqli_query($conn, $sql1)) 
{
    
}

?> 