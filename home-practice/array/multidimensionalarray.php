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
                Multidimensional Array 
            </h2>
        </div>
        <?php
        //example 1
        $nums = array(
            array(1,2,3),
            array(4,5,6),
            array(7,8,9)
        );
        echo"<pre>";
        print_r($nums);
        echo "</pre>";
       //echo $nums[0][0];
        
        for($i=0; $i < 3; $i++){
            
            for($j=0; $j < 3; $j++){
            echo $nums[$i][$j] . "  ";
            }
            echo "<br>";
          }
          
          
        //example 2
          //$nums2=[][];
          $nums2 = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
            ];
        echo"<pre>";
        print_r($nums2);
        echo "</pre>";
       
        
        for($i=0; $i < 3; $i++){
            
            for($j=0; $j < 3; $j++){
            echo $nums2[$i][$j]. "   ";
            }
            echo "<br>";
          }
         
          //example 3
          $nums3[0] = [1,2,3];
          $nums3[1] = [4,5,6];
          $nums3[2] = [7,8,9];

        echo"<pre>";
        print_r($nums3);
        echo "</pre>";
       
        
        for($i=0; $i < 3; $i++){
            
            for($j=0; $j < 3; $j++){
            echo $nums3[$i][$j]. "   ";
            }
            echo "<br>";
          }
          
          
          //example 2
          $cars = array
            (
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );

        for($i=0; $i < 4; $i++){
          
            echo $cars[$i][0].": In stock: ".$cars[$i][1].", sold: ".$cars[$i][2].".<br>";
        }
        
 
        ?>
    </body>
</html>
