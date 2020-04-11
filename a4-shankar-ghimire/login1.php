<?php
        session_start();
	// to avoid 'headers already sent...' warning
	ob_start();
        
	
	require_once 'config.php';
        
        //echo "testing";
	// read the values
	$login_name = $_REQUEST['login_name'];
	$login_password = $_REQUEST['login_password'];
        
        //echo "LogIn Id : " .$login_name . "<br> login password is : " . $login_password;
	// SQL query to select a row based on username
	$query = "Select * from tblusers where username = '$login_name'";
        //echo $query;
        
        // execute the query
	$result = mysqli_query($conn, $query);
        //echo "testng after executing query in MySQL";
        //echo "total record found :" . mysqli_num_rows($result);
        // check if a row was fetched
        if (mysqli_num_rows($result) == 1) {
            
            //echo "testin after finding matched record";
            $row = mysqli_fetch_assoc($result);     // read the row
            $hashed_password = $row['password'];    // read the hashed password from the row
            if (password_verify($login_password, $hashed_password)) {
                // create the session for the user
                $_SESSION['user_name'] = $row['username'];
                //echo "testing user name after matching password : " . $user_name;
                // redirect to member's page
                header('location:index.php');                
            }
            else{
                //unset($_SESSION['user_name']);
                //echo "testing : password does not match";
                header('location:login.php?login_result=password_fail');
            }
            ob_end_flush();
            die();
        } else if (mysqli_num_rows($result) == 0) {
            echo "testing after not getting any record";
            unset($_SESSION['user_name']);
            // otherwise redirect to login page
            header('location:login.php?login_result=user_name_fail');
        }
?>