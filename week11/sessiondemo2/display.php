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
        <?php
        $_SESSION['name']= $_POST['name'];
        $name= $_SESSION['name'];
        $password = $_POST['password'];
        
        if($_SESSION['name']=='test' && $password=='123'){
            echo "<br>Welcome!,". $_SESSION['name'];
            unset($_SESSION['name']);
            echo "<br>Session Variable deleted.";
            echo "<br>Session variable name is ";
            echo $_SESSION['name'];
        }
        else{
            echo "You are not an authorized user.";
        }
        
        ?>
    </body>
</html>
