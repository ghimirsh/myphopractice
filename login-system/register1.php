<?php
    ob_start();//to avoid 'header's already sent ...' warning
    require_once 'config.php';
    
    $username=$_REQUEST['username'];
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
            header('location:register.php?result=success');
        }else{
            header('location:register.php?result:fail');
        }
    }
?>
<!DOCTYPE html>
<!--
Shankar Ghimire
StudentId:991585190
Course: ...............
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
