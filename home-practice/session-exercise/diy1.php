<?php
    session_start();
    if(!isset($_SESSION['count'])){
        $_SESSION['count'] = 1;
    }
    else{
        $_SESSION['count']++;
    }
?>
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
                Make a web page that uses session to keep track of how many times a user has viewed the page. The first time a particular user looks at the page, it should print something like “Number of views: 1.” The second time the user looks at the page, it should print “Number of views: 2,” and so on.

            </h2>

            <hr>
            <a href='page2.php'>Next Page</a>
            <br>
            <br>
            
            
        </div>
        <?php
        // put your code here
        
            echo "Total Number of Views : " . $_SESSION['count'];
            
           
        ?>
    </body>
</html>
