<?php
    session_start();
    $_SESSION['age']=$_POST['age'];
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
            <h2>Hi, <?php echo $_SESSION['name'];?></h2>
        </div>
        <div>
            <form method="post" action="step4.php">
                What's your favorite color?
                <input type="text" name="color">
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
