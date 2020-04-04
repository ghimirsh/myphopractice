<?php
    session_start();
    $_SESSION['age']= $_GET['age'];
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
            <h2>Hello, <?php echo $_SESSION['name'] ?>
                <br>
                You are <?php //echo $_SESSION['age'];?> years.
            </h2>
        </div>
        <div>
            <form method="get" action="step4.php">
                What is your favorite color?
                <br><input type="text" name="color">
                <br><input type="submit" value="Submit">
            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
