<?php
    session_start();
    ob_start();//to avoid 'header's already sent ...' warning
    require_once 'config.php';
    //echo "testing";
    
    //extracts user credential from register.php
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $confirm_password=$_REQUEST['confirmpassword'];
    //testing
//    echo "user name is: ". $username;
//    echo "password is : " . $password;
//    echo "confirm password is : ". $confirm_password;
    
    $is_valid="ok";
    //data validation
    if(empty($username)){
        $_SESSION['username_error']="UserName cannot be blank!";
        $error_msg="error-empty-username";
        $is_valid="no";
        //echo $is_valid;
    }else if(strlen($username) < 5) {
        $_SESSION['username_error']="UserName must be at least 5 characters long!";
        $error_msg="error-min-length-username";
        $is_valid="no";
//        echo $is_valid;
    }else if(empty($password)){
        $_SESSION['password_error']="Password cannot be blank!";
        $_SESSION['new_user_name']= $username;
        $error_msg="error-empty-password";
        $is_valid="no";
    }else if(strlen($password)< 5) {
        $_SESSION['new_user_name']= $username;
        $_SESSION['username_error']="Password must be at least 5 characters long!";
        $error_msg="error-minlength-password";
        $is_valid="no";
    }
    else if( strcmp($password,$confirm_password)!=0){
        $_SESSION['new_user_name']= $username;
        $_SESSION['confirm_password_error']="Confirm Password does not match!";
        $error_msg="error-confirm-password";
        $is_valid="no";
    }
    //echo $error_msg;//for testing
    //echo "<br>".$is_valid;//for testing
    if($is_valid=="ok"){
        //echo $is_valid;//testing purpose
        //code to inserts into database
        //encrypts the password
        $hashed_password = password_hash($_REQUEST['password'],PASSWORD_DEFAULT);

        //checks if the username alreadys exists or not
        $query = "select username from tblusers where username='$username';";
        $result = mysqli_query($conn, $query);
        //if a row is fetched, then username exists
        if(mysqli_num_rows($result)){
            //redirects to register.php page
            header('location:register.php?result=userexists');
        }else{

            //inserts user info into the tblusers in database
            $query = "insert into tblusers(username,password) values ('". $username ."','". $hashed_password ."');";
            $result = mysqli_query($conn, $query);
            if($result == 1){
                //echo "record inserted into table.";//testing purpose
                header('location:register.php?result=success');
            }else{
                header('location:register.php?result=fail');
            }
    }      
    }else{
        //echo $error_msg;//testing purpose
        //redirects to the register page
        header('location:register.php?result=validation_fail');
    }
    
?>
