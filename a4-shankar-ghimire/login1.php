<?php
//    echo "testing";
        //calls function to clear output buffer
        ob_start();
        // start the session
	session_start();		 
	require_once 'config.php';

	// read the values
	$user_name = $_REQUEST['user_name'];
	$password = $_REQUEST['password'];
        
       
        //echo "testing";
        // echo $user_name."<br>";
        //echo $password."<br>";
        //
	//query that selects a record based on given username
	$query = "Select * from tblusers where username = '$user_name'";

	// execute the query
	$result = mysqli_query($conn, $query);
        // check if a row was fetched
	if (mysqli_num_rows($result) == 1)
	{
            //echo "record found!";
		$row = mysqli_fetch_assoc($result);     // read the row
		$hashed_password = $row['password'];    // read the hashed password from the row

		if (password_verify($password, $hashed_password))
                {
            		// create the session for the user
			$_SESSION['user_name'] = $user_name;

			// redirect to home's page
//			header('location:member.php');
                        header('location:insert.php?result=success');
//                        echo "<h1> testing user name is : " . $_SESSION['user_name'];
			ob_end_flush();
			die();
            	}
    	}
        else if (mysqli_num_rows($result) == 0){
            unset($_SESSION['user_name']);
//            echo "No record found!";
//             echo "<h1> testing user name is : " . $_SESSION['user_name'];
             
             
             // otherwise redirect to login page
            header('location:login.php?result=fail');
        }
    
	

?>