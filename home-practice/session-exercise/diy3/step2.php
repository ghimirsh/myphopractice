<?php
    session_start();
    $_SESSION['name']= $_GET['name'];
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
            <h2>
                Hello, <?php echo $_SESSION['name'];  ?>
            </h2>
        </div>
        <div>
            <form method="get" action="step3.php">
                What is your age?
                <br><input type="age" name="age">
                <br>
                <input type="submit" Value="Submit">
            </form>
        </div>
        <?php
        
        ?>
    </body>
</html>
