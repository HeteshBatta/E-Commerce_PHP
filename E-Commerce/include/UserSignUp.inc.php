<?php
session_start();

    if(isset($_POST['submitUserSignUp']))
    {
        include "./dbconnect.inc.php";
            $user_name = strtolower(htmlspecialchars($_POST['Fullname']));
			$email = strtolower(htmlspecialchars($_POST['Email']));
			$password = strtolower(htmlspecialchars($_POST['pwd']));
			$mobile = strtolower(htmlspecialchars($_POST['MobileNo']));
			$address = strtolower(htmlspecialchars($_POST['Address']));
            $gender = strtolower(htmlspecialchars($_POST['Gender']));
            
            $sql = "INSERT INTO users (UserName,Email,Pwd,UserAddress,Mobile,Gender)
	        VALUES ('$user_name','$email' , '$password' , '$mobile' , '$address' , '$gender')";
            if (mysqli_query($conn, $sql)) 
            {
		        
            }
            else
            {
                header('Location: /E-Commerce/Signup.php?error='. mysqli_error($conn));
            }  
			$_SESSION['UserName'] = $user_name;
			$_SESSION['Mobile'] = $mobile;
			$_SESSION['Email'] = $email;
			$_SESSION['Address'] = $address;
            $_SESSION['Gender'] = $gender;
            $_SESSION['Password'] = $password;

            header('Location: /E-Commerce/index.php'); 
	        mysqli_close($conn);    
    }
?>