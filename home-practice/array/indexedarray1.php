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
            <h2>Example of Indexed Array</h2>
        </div>
        <?php
        //method 1:
        $nums1 = array(11,22,33,44,55);
        echo "The array elements are : ";
        foreach($nums1 as $val){
            echo "   $val";
        }
        
        //method 2:
        $nums2 = [11,22,33,44,55];
        echo "<br>The array elements are : ";
        foreach($nums2 as $val){
            echo "   $val";
        }
        
        //method 3:
        $nums3[0] = 11;
        $nums3[1] = 22;
        $nums3[2] = 33;
        $nums3[3] = 44;
        $nums3[4] = 55;
        echo "<br>The array elements are : ";
        foreach($nums3 as $val){
            echo "   $val";
        }
        ?>
    </body>
</html>
