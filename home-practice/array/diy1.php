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
                Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
            </h2>
            <h2>
                Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

            </h2>
        </div>
        <?php
        $temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
        //echo "count : " . sizeof($temp);
        echo "The daily temparature are : <br>";
        $avg_temp = 0.0;
        $total_temp = 0.0;
        for($i=0; $i < sizeof($temp); $i++){
            echo $temp[$i]. ", ";
            $total_temp+= $temp[$i];
        }
        $avg_temp = $total_temp / sizeof($temp);
        echo '<br>'. "Average Temperature : ". round( $avg_temp,2);
        
        //to print lowest 5 temperature:
        sort($temp);
        echo "<br>The lowest 5 temperature are :  ";
        for($i=0; $i < 5; $i++){
            echo $temp[$i]. ", ";
        }
        
        //to print top 5 temperature:
        rsort($temp);
        echo "<br>The top 5 temperature are :  ";
        for($i=0; $i < 5; $i++){
            echo $temp[$i]. ", ";
        }
        ?>
    </body>
</html>
