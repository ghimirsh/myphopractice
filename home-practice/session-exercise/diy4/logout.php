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
            // destroy the session
            session_destroy();
            echo "<h2>Successfully logged out</h2>";
        ?>
    </body>
</html>
