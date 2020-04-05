<?php
    // start a new session
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
            // read the user's input
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // check if they match
            if ($username == "abc" && $password == "abc")
            {
                echo "<h2>Login successful</h2>";
                echo "<h3>Welcome $username</h3>";
                
                // create a session with the user's username
                $_SESSION['username'] = $username;
            }
            else
            {
                echo "<h2>Login failed. Please try again</h2>";
            }
        ?>
    </body>
</html>
