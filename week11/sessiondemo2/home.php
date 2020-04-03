<?php
    session_start();
    
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
        <?php
            if(!isset($_SESSION['count'])){
                 $_SESSION['count']=1;
                
            }else{
                $_SESSION['count']++;
            }
            echo "Number of times visited : " . $_SESSION['count'];
        ?>
    </body>
</html>
