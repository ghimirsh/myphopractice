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
            <h1>Log In Example Using Session</h1>
        </div>
        <a href="index.php">Home</a> | 
        <a href="here.php"> Go Here</a> | 
        <a href="there.php">Go There</a> | 
        <a href="logout.php">Log Out</a> 
        <hr>
        <div>
            <form action="dashboard.php" method="post">
                UserName : <input type="text" name="username"><br><br>
                Password : <input type="password" name="password"><br><br>
                <input type="submit" value="Submit">
                
            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
