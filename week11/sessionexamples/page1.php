<?php
    session_start();
    echo session_id();
    $_SESSION['user']="Shankar";
    $_SESSION['class']="Web Programming";
    
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
        echo $_SESSION['user'];
        echo "<br>";
        echo $_SESSION['class'];
        ?>
        <a href="page2.php">Page 2</a>
    </body>
</html>
