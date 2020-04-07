<?php
    session_start();
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
          <?php
                require_once 'header.php';
            ?>
        <div class="wrapper">
     
            <div class="home-main-wrapper">
                
                <h2>Welcome to Log Out Page!</h2>               
            </div>
            <div id="logout-form-box">
                <form action="logout1.php" method="post">
                    <table style="margin:0 auto; width:50%;">
                        <tr>
                            <td>Are you sure to log out? </td>
                            <td><input type="submit" name="submit" value="Log Out"></td>
                        </tr>                        
                    </table>
                </form>              
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>  
      <?php
        require_once 'footer.php';
        ?>  
    </body>
</html>
