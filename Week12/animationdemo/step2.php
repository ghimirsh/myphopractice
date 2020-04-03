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
         <p>what is your preferred color</p>
         H:<input type="text" name="hvalue">
         <br>
         S:<input type="text" name="svalue">
         <br>
         L:<input type="text" name="lvalue">
         <br>
         <input type="submit">
        </form>
    </body> 
</html>
