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
                Write a PHP function to change the following array's all values to upper and lower case.

            </h2>
            <h2>
                Sample arrays:
                $colors = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
             
            </h2>
        </div>
        <?php
            $colors= array(
                'A' => 'Blue',
                'B' => 'Green',
                'C' => 'Red'
            );
            echo "Array element in Upper case: <br>";
            echo strtoupper( $colors['A']). "<br>";
            echo strtoupper( $colors['B']). "<br>";
            echo strtoupper( $colors['C']). "<br>";
            
            echo "Array element in Lower case: <br>";
            echo strtolower( $colors['A']). "<br>";
            echo strtolower( $colors['B']). "<br>";
            echo strtolower( $colors['C']). "<br>";
            
        ?>
    </body>
</html>
