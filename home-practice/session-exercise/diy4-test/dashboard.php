<?php
    session_start();
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
        <a href="index.php">Home</a> | 
        <a href="here.php"> Go Here</a> | 
        <a href="there.php">Go There</a> | 
        <a href="logout.php">Log Out</a> 
        <hr>
        <?php
            $username=$_POST['username'];
            $password=$_POST['password'];
            if($username == "abc" && $password=="abc"){
                echo "<h2>Log In success!</h2>";
                $_SESSION['username']= $username;
            }
            else{
                echo "<h2>Log in failed!!!";
                echo "<h3>Try again</h3>";
            }
        ?>
    </body>
</html>
