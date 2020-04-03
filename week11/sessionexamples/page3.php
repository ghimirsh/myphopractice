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
        echo "<br>Printing values from another page<br>";
        echo "User is " . $_SESSION['user'];
        echo "<br>";
        echo "Course is ".  $_SESSION['class'];
        echo "<br>";
        ?>
        <a href="page1.php">Page 1</a>
    </body>
</html>
