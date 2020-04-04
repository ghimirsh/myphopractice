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
            <h2>Example of Associative Array</h2>
        </div>
        <?php
        //method 1:
        $student1 = array(
            'Manish'=>22,
            'Sam'=>25,
            'Tom'=>35
        );
        echo "the array elements are :<br>";
        echo "<pre>";
            print_r($student1);
        echo '</pre>';
        
        //method 2:
        $student2 = [
            'Manish'=>22,
            'Sam'=>25,
            'Tom'=>35
        ];
        echo "the array elements are :<br>";
        echo "<pre>";
            print_r($student2);
        echo '</pre>';
        
        //method 3:
        $student3['Manish']=22;
        $student3['Sam']=25;
        $student3['Tom']= 35;
        
        echo "the array elements are :<br>";
        echo "<pre>";
            print_r($student3);
        echo '</pre>';
        
        
        
        ?>
    </body>
</html>
