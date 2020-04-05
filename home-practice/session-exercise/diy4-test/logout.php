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
            echo "You have successfully logged out.";
            session_destroy();
        ?>
    </body>
</html>
