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
        echo"example of multi dimensional array";
        $marks = array('Jone'=>array('Math'=>98,'Science'=>99),
                        'Kevin'=>array('Math'=>80,'Science'=>77),
                        'Tom'=>array('Math'=>88,'Science'=>99),
            );
    
        echo "<br>Marks of Kevin are : ";
        echo "<pre>";
        print_r($marks['Kevin']);
        echo "</pre>";
  
        echo "<br>Marks of Kevin are: ";
        foreach($marks['Kevin'] as $m){
            echo "<br>$m";
        }
        
        
              
        
        echo "<pre>";
        print_r($marks);
        echo "</pre>";
        echo $marks['jone'];
        echo '<br>';
        echo $marks['Kevin']['Math'];
        echo $marks['Kevin']['Science'];
        echo $marks['Kevin'];
        ?>
    </body>
</html>
