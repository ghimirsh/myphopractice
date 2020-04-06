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
            require_once 'header.php';
        ?>
        <div class="wrapper">
     
            <div class="home-main-wrapper">
                
                <h2>Welcome to Log In Page!</h2>               
            </div>
            
            <?php
            session_start();
            session_destroy();

            header('location:login.php');
            ?>

        </div>  
      <?php
        require_once 'footer.php';
        ?>  
    </body>
</html>
