<?php
session_start();

    if(isset($_POST['AddProducts']))
    {
        include "./dbconnect.inc.php";
        print_r($_POST);
        $Productname = $_POST['productname'];
        $image = $_FILES['prodimage'];
        print_r($_FILES);
        $fileTmpName = $image['tmp_name'];
        $productprice = $_POST['price'];
        $productquantity = $_POST['Quantity'];

        $fileName = $image['name'];
        $fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
        $fileNameNew = uniqid('', true).'.'.$fileActualExt;
        $fileDest = '../images/'.$fileNameNew;

        $sql = "INSERT INTO products (Productname,Price,Quantity,ProdImage)
        VALUES ('$Productname' , '$productprice' , '$productquantity' , '$fileNameNew')";
        if (mysqli_query($conn, $sql)) {
		
	    }
        
        mysqli_close($conn);
        move_uploaded_file($fileTmpName, $fileDest);
    }

?>