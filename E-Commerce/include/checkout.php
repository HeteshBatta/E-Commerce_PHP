<?php
    include "include/dbconnect.inc.php";
    $userid = $_SESSION['Id'];
    $sql = "SELECT * FROM products prod join user_products cartvalues on 
    prod.Id = cartvalues.prodid and cartvalues.userid = '".$userid."' ";
    $result = mysqli_query($conn , $sql);
    $resultcheck = mysqli_num_rows($result);
    $id = 0;
    $total = 0;
    while($row = mysqli_fetch_array($result)) 
    {
  $temp = 0;
  if($row['quantity'] > 0 && $row['Productname']!=NULL)
  {
  echo "<tr>";
  echo "<td>" . $row['Productname'] . "</td>";
  echo "<td>" . $row['Price'] . "</td>";
  echo "<td>" . $row['quantity'] . "</td>";
  echo "<td> <button class=btn onclick=myfunction(event) id=" .$id. "> Delete one </button> </td>";
  echo "</tr>";
  $id++;
  $temp = $row['Price'] * $row['quantity'];
  $total += $temp;
  }
}

?>


                        