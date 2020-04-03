<?php
    session_start();
    
    if(!isset($_SESSION['counter'])){
        $_SESSION['counter'] = 1;
    }
    else{
        $_SESSION['counter']++;
    }
   
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
         <p>
            <?php phpinfo(); ?>
        </p>
        <div>
            <h2>Welcome to my tutorial</h2>
            <h3>Shankar Ghimire</h3>
        </div>
        <div>
            <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
             <br> <br> <br>
        </div>
        <?php
        // put your code here
        echo "Number of views : " . $_SESSION['counter'];
        ?>
    </body>
</html>
