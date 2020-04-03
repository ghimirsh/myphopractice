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
        $salary = array(2000, 3000, 4000);
        //displaying array values
        echo "array elements are : ";
        echo "<br>";
        foreach($salary as $value){
            echo "$value <br>";
        }
        //using print _r method
        echo "<pre>";
        print_r($salary);
        echo "</pre>";
        ?>
    </body>
</html>
