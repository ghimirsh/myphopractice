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
                Write a PHP script to get the shortest and longest string lengths from an array.
                <br>Sample array: ("abcd", "abc", "de", "hjjj", "g", "wer")

            </h2>
        </div>
        <?php
            $vals =array("abcd", "abc", "de", "hjjj", "g", "wer");
            $shortest_length=0;
            $shortest_term="";
            $longest_length=0;
            $longest_term="";
            $temp = $vals[0];
            echo $temp;
            echo "<br>The terms are : <br>";
            for($i=0; $i < count($vals); $i++){
                echo $vals[$i]. "  ";
            }
            echo '<br>total terms are :'. count($vals);
//            echo "----------------------<br>";
//             for($i=0; $i < count($vals); $i++){
//                echo $vals[$i]. " =  ". strlen($vals[$i])."<br>";
//            }
//            echo "----------------------<br>";
            $longest_term = $vals[0];
            for($i=1; $i < count($vals); $i++){
                if( strlen($vals[$i]) > strlen($longest_term) ){
                    $longest_term = $vals[$i];             
                }
            }
            echo "<br>The longest term is : ". $longest_term;
            echo "<br>The longest term is : ". strlen($longest_term) ;
            echo "<br>-----------------------<br>";
             $shortest_term = $vals[0];
            for($i=1; $i < count($vals); $i++){
              
                if( strlen($vals[$i]) < strlen($shortest_term) ){
                   
                     $shortest_term = $vals[$i];
                }

            }
            
            echo "<br>The shortest term is : ". $shortest_term;
            echo "<br>The shortest term is : ". strlen($shortest_term);
        ?>
    </body>
</html>
