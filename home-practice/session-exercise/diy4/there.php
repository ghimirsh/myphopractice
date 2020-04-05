<?php
    // continue the previous session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
		<a href='index.php'>Home</a> | 
        <a href='here.php'>Go Here</a> | 
        <a href='there.php'>Go There</a> | 
        <a href='logout.php'>Logout</a>
        
        <br><br><br>
		
        <?php
            // check if session exists
            if (isset($_SESSION['username']))
            {
                echo "<h2>Welcome there</h2>";
            }
            else
            {
                echo "<h2>Access Denied</h2>";
            }
        ?>
    </body>
</html>
