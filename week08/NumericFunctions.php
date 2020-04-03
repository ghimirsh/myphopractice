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
        #checking static variable
        function staticVariable(){
            STATIC $num = 5;
            $num++;
            echo "<br>$num";
        }
        staticVariable();
        staticVariable();
        staticVariable();
        print("<br><br>");
        #variable scope
        #
        
        $x = 10;
        function variableScope(){
            GLOBAL $x ;
            //$x= 20;
            $x++;
            print("<br><br>value of \$x inside function is $x");
        }
        variableScope();
        print("<br><br>value of \$x outside function is $x");
        print("<br><br>");
        #testing null data type
        #testing Boolean  data type
        function checkNull(){
            $a = 10;
            if(isset($a)){
                print("<br>\$a is set and its value is $a");
            }
            else{
                print("<br>\$a is NOT set and its value is $a");
            }
        }
        checkNull();
        
        function demoBoolean() {
            if (!true) {
                print("<br><br>This will always print.<br>");
            } else {
                print("<br><br>This will never print.<br>");
            }
            //integer converting into boolean
            $num = 0;
            if ($num) {
                print("true, $num<br>");
            } else {
                print("false, $num<br>");
            }

            //string converting into boolean
            print("<br><br>Testing string and boolean");
            $str1 = "";
            if ($str1) {
                print("<br>true, $str1<br>");
            } else {
                print("<br>false, $str1<br>");
            }
        }

        demoBoolean();

//        echo 'test';
        function numberFormat() {
            echo"<br><br><br>testing";
            $number = 1234.56;
            $formatted1 = number_format($number);
            echo "<br>$formatted1";
        }

        numberFormat();

        //testing PHP Arithmetic operator
        function demoArithmetic() {
            $a = 50;
            $b = 10;

            $c = $a + $b;
            $d = $a - $b;
            $e = $a * $b;
            $f = $a / $b;
            $g = $a % $b;
            echo "<br> suf of $a + $b = $c";
            echo "<br> difference of $a - $b = $d";
            echo "<br> profuct of $a * $b = $e";
            echo "<br>quotient of $a / $b = $f";
            echo "<br>remainder of $a % $b = $g";
        }

        demoArithmetic();
        ?>
    </body>
</html>
