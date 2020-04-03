<?php
    session_start();
    $_SESSION['name']= $_POST['name'];
    
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
            <form method="post" action="step3.php">
                How old are you?
                <input type="text" name="age">
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
