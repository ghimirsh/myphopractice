<?php
    session_start();
    echo "<br>". session_id();
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
        echo "<br>Printing values from another page<br>";
        echo "User is " . $_SESSION['user'];
        echo "<br>";
        echo "Course is ".  $_SESSION['class'];
        echo "<br>";
        echo "Using loop:";
        foreach($_SESSION as  $val){
            echo "<br> $val";
        }
        echo "<br>";
        echo "Using  print_r  tag:";
        echo '<pre>';
        print_r($_SESSION) ;
        echo '</pre>';
        ?>
        <a href="page3.php">Page 3</a>
    </body>
</html>
