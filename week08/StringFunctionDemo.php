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
        
        function demoString() {
            #checking substr() function
            $a = "abcdef";
//            $b = substr($a,1);
//            echo "<br>$b";
//            $b = substr($a,2);
//            echo "<br>$b";
//            $b = substr($a,3);
//            echo "<br>$b";
//             $b = substr($a,1,2);
//            echo "<br>$b";
//            $b = substr($a,2, 2);
//            echo "<br>$b";
//            $b = substr($a,3, 2);
//            echo "<br>$b";
            $b = substr($a,-1);
            echo "<br>$b";
            $b = substr($a,-2);
            echo "<br>$b";
            $b = substr($a,-3);
            echo "<br>$b";
//             $b = substr($a,-1,2);
//            echo "<br>$b";
//            $b = substr($a,-2, 2);
//            echo "<br>$b";
//            $b = substr($a,-3, 2);
//            echo "<br>$b";
            echo "<br><br>";
            
            
            
            
            
            
            
            echo "<br><br>";
            #checking strpos() function
            echo "<br> function: strpos()";
            $email = "myemailabc.com";
            $pos = strpos($email, "@");

            if ($pos === false) {
                echo "<br>There was no @ in the e-mail address!";
            }
        }
        demoString();
        
        ?>
    </body>
</html>
