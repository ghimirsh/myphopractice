<?php
    session_start();
    $guess=$_GET['guessnumber'];
    
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
        $start=$_SESSION['firstnum'] + 1;
        $end = $_SESSION['secondnum'] - 1;
        $randomnum=rand($start, $end);
//        echo $randomnum;
        if($randomnum == $guess){
            echo "<h2>Congratulation!you win.</h2>";
        }
        else{
            echo "<h2>Sorry!. Try again!</h2>";
        }
        // put your code here
        ?>
    </body>
</html>
