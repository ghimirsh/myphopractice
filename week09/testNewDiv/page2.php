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
        <link rel="stylesheet" href="_css/styles.css">
    </head>
    <body>
        <?php
        // put your code here
        $num1 = $_POST['image1'];
        $num2 = $_POST['image2'];
        
        ?>
        <div id="container">
            <div id="main-content">
                <?php 
                    for($i=1; $i <= $num1; $i++){
                        echo '<img src="_images/cup.jpg" width=100px">';
                        for($j=1; $j<= $num2; $j++){
                          echo '<img src="_images/sugar.jpg" width=100px">';  
                        }
                        echo'<br>';
                    }
                    
                ?>
            </div>
        </div>
        <?php 
        echo $img1;
        echo "<br> $img2"
        ?>
    </body>
</html>
