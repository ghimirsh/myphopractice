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
        <h2>Welcome to page 2</h2>
        <?php
        // put your code here
        session_unset();
        ?>
        <p>
            <a href="diy1.php">Page 1</a>
        </p>
    </body>
</html>
