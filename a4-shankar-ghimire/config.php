<?php
	$host = 'localhost';	// name of the server, usually localhost
	$db_username = 'ghimirsh_shankar';	// database username
	$password = '2%F4A[1~J3+L'; 	// database password
	$db_name = 'ghimirsh_testdb';   	// the database name
	
	// Create connection
	$conn = mysqli_connect($host, $db_username, $password, $db_name);

	// Check connection
	if (empty($conn))
	{
		die("Connection failed: " . mysqli_connect_error());
	}
        
//only added for testing purpose        
//        else{
//            echo "connection successful";
//        }
//
//
