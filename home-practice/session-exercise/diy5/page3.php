<?php
    session_start();
    $guessnumber=$_GET['guessnumber'];
    
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
            <h1>Welcome to Guessing game!</h1>
        </div>
        <hr>
       
        <?php

        if($_SESSION['randomnumber'] == $guessnumber){
            echo "<h2>Congratulation!you win.</h2>";
        }
        else{
            echo "<h2>Sorry!. Try again!</h2>";
            echo "<h3>the random number is ". $_SESSION['randomnumber'];
            session_destroy();
        }
        echo "<p><a href='index.php'>Play again?</a>"
        // put your code here
        ?>
    </body>
</html>
