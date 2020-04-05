<?php
    session_start();
     $firstnum= $_GET['firstnum'];
     $secondnum= $_GET['secondnum'];
     $_SESSION['firstnum']= $firstnum;
     $_SESSION['secondnum'] = $secondnum;
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
        <div>
            <h2>Enter a  number in the range of 
            <?php echo $firstnum; ?> and <?php echo $secondnum; ?>
            </h2>
        </div>
        <div>
            <form method="get" action="page3.php">
                Enter your guess number: <input type="text" name="guessnumber"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <?php
        
        // put your code here
        ?>
    </body>
</html>
