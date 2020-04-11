<?php
    session_start();
    ob_start();//to avoid 'header's already sent ...' warning
    require_once 'config.php';
    //echo "testing<br>";
    
    //extracts user credential from register.php
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    //testing
    //echo "<br>user name is: ". $user_name;
    //echo "<br>password is : " . $password;
    //echo "<br>confirm password is : ". $confirm_password;
    
    $is_valid="ok";
    //data validation
    if(empty($user_name)){
        $_SESSION['user_name_error']="UserName cannot be blank!";
        //$error_msg="error-empty-username";//for testing
        $is_valid="no";
        //echo $is_valid;
    }else if(strlen($user_name) < 5) {
        $_SESSION['user_name_error']="UserName must be at least 5 characters long!";
        //$error_msg="error-min-length-username";//for testing
        $is_valid="no";
//        echo $is_valid;
    }else if(empty($password)){
        $_SESSION['password_error']="Password cannot be blank!";
        $_SESSION['new_user_name']= $user_name;
        //$error_msg="error-empty-password";//for testing
        $is_valid="no";
    }else if(strlen($password)< 5) {
        $_SESSION['new_user_name']= $user_name;
        $_SESSION['user_name_error']="Password must be at least 5 characters long!";
        //$error_msg="error-minlength-password";//for testing
        $is_valid="no";
    }
    else if( strcmp($password,$confirm_password)!=0){
        $_SESSION['new_user_name']= $user_name;
        $_SESSION['confirm_password_error']="Confirm Password does not match!";
        //$error_msg="error-confirm-password";//for testing
        $is_valid="no";
    }
    //echo "<br>is_valid: " . $is_valid;
    //echo $error_msg;//for testing
    //echo "<br>".$is_valid;//for testing
    if($is_valid=="ok"){
        //echo $is_valid;//testing purpose
        //code to inserts into database
        //encrypts the password
        $hashed_password = password_hash($_REQUEST['password'],PASSWORD_DEFAULT);

        //checks if the username alreadys exists or not
        $query = "select username from tblusers where username='$user_name';";
        $result = mysqli_query($conn, $query);
        //if a row is fetched, then username exists
        if(mysqli_num_rows($result)){
            //redirects to register.php page
            header('location:register.php?result=userexists');
        }else{

            //inserts user info into the tblusers in database
            $query = "insert into tblusers(username,password) values ('". $user_name ."','". $hashed_password ."');";
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
