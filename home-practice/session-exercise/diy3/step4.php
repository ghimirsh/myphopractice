<?php
    session_start();
    $_SESSION['color']= $_GET['color'];
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
        <div>
            <h2>Hello, <?php echo $_SESSION['name']; ?></h2>
            <p>You are <?php echo $_SESSION['age']; ?> years.</p>
            <p>Your favorite color is :<?php echo $_SESSION['color']; ?> </p>
        </div>
        
        <?php
        // put your code here
        session_unset();
        
        ?>
        <br>
        <br>
        <br>
        Go to <a href="step1.html">Page 1</a>
    </body>
</html>
