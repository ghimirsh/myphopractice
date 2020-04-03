<?php
    session_start();
    $_SESSION['color']=$_POST['color'];
    
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
                Hi, <?php echo $_SESSION['name'];?>           
            </h2>
            <p>You are <?php echo $_SESSION['age'];?></p>
            <p>
                your favorite color is : <?php echo $_SESSION['color'] ?>
            </p>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
