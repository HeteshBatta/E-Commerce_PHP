<?php

    session_start();

    if(isset($_POST['UserLogin']))
    {
        include "./dbconnect.inc.php";

        $LoginEmail = $_POST['loginemail'];
        $LoginPwd = $_POST['loginpwd'];
        
            $sql = "SELECT * from users where Email='$LoginEmail' ";
            $result = mysqli_query($conn, $sql);
			$resultcheck = mysqli_num_rows($result);

            if ($resultcheck == 0) 
            {
                //no user found
                header('Location: ../index.php?error=No Such User');
                exit();
            }
            else
            {
                if($rows = mysqli_fetch_assoc($result))
                {
                    if($LoginPwd != $rows['Pwd'])
                    {
                        //password incorrect
                        header('Location: ../index.php?error=Password Incorrect');
                        exit();
                    }
                    else
                    {
                        $_SESSION['ISLOGGEDIN'] = "YES";
                        $_SESSION['Id'] = $rows['id'];
                        $_SESSION['UserName'] = $rows['UserName'];
			            $_SESSION['Mobile'] = $rows['Mobile'];
			            $_SESSION['Email'] = $rows['Email'];
			            $_SESSION['Address'] = $rows['UserAddress'];
                        $_SESSION['Gender'] = $rows['Gender'];
                        $_SESSION['Password'] = $rows['Pwd'];

                        header('Location: /E-Commerce/ProductsPage.php'); 
	                    mysqli_close($conn);  
                    }
                }
            }
    }

?>