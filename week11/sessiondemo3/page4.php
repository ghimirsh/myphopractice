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
        echo "Session Id is : " . session_id();
            echo"<br>";
        $name = $_SESSION['name'];
        $age =$_POST['age'];
        echo "Welcome!,". $name;
        echo"<br>";
        echo "you are ". $age . " years old.";
        ?>
    </body>
</html>
