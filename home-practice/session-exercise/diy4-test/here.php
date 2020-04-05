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
            if(isset($_SESSION['username'])){
                echo "<h2>Welcome to Here page</h2>";
            }
            else{
                echo "<h2>Access denied!</h2>";
            }
        ?>
    </body>
</html>
