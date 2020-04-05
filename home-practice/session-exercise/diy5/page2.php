<?php
    session_start();
     $start= $_GET['minvalue'];
     $end= $_GET['maxvalue'];
     $_SESSION['randomnumber']= mt_rand($start+1,$end-1);
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
            <?php echo $start; ?> and <?php echo $end; ?>
            </h2>
        </div>
        <div>
            <form method="get" action="page3.php">
                Enter your guess number: <input type="number" name="guessnumber" min="<?=$start+1;?>" max=<?=$end-1;?> ><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <?php
        
        // put your code here
        ?>
    </body>
</html>
