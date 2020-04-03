<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Session Management</title>
    </head>
    <body>
        <?php
        $_SESSION["name"] = $_GET["name"];
        ?>
        <h1>Hello <?= $_SESSION["name"] ?></h1>
        <form action="step3.php" method="GET">
         <p>what is your preferred color ?</p>
         <input type="text" name="color">
         <input type="submit">
        </form>
    </body> 
</html>
