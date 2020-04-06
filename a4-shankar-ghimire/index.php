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
        <link rel="stylesheet" type="text/css" href="_css/main-style.css">
    </head>
    <body>
        <?php
            require_once 'header.php';
        ?>
        <div class="wrapper">  
            <div>
            <?php
//		// to display the message back to the user after log in attempt
//		//if (isset($_REQUEST['result']))
//                if(isset($_SESSION['loginname']))
//		{
//                    echo "testing from if";
//			if ($_REQUEST['result'] == "success")
//			{
//				echo "<h1>Hello," . $_SESSION['username']. "</h1>";
//                                echo "<h1>Welcome to Home Page!</h1>";
//			}else{
//                            echo "<h1>Welcome to Home Page!</h1>";
//                        }
//                        
//		}
//                else{
//                     echo "testing from else";
//                    echo "<h1>Welcome to Home Page!</h1>";
//                }
//                ?>
                
            </div>
            
            <div class="home-main-wrapper">
                <div>
                    <h1>Welcome to Home Page!</h1>
                </div>
                <div class="image-holder">
                   <img class="welcome-image" src="_images/flower1.jpg" width="500px" alt="National Flower of Nepal"> 
                </div>               
            </div>
            <br><br><br><br>
        </div>  
      <?php
        require_once 'footer.php';
        ?>  
    </body>
</html>
