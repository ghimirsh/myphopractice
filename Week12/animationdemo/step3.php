<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $_SESSION["hvalue"] = $_GET["hvalue"];
        $_SESSION["svalue"] = $_GET["svalue"];
        $_SESSION["lvalue"] = $_GET["lvalue"];
//        $_SESSION["name"] = $_GET["name"];
        $h=$_SESSION["hvalue"];
        $s=$_SESSION["svalue"];
        $l=$_SESSION["lvalue"];
        ?>
        <!--<div style="color: hsl(30, 50%, 70%)">-->
        <h2> 
            <div style="color: hsl(<?=$h?>,<?=$s?>,<?=$l?>)">
               Hello, <?= $_SESSION["name"] ?>
            </div>
        </h2>
        <form action="step4.php" method="GET">
            <p>What is your preferred design</p>
            <select name="circleSquare">
            <option value="circle">circle</option>
            <option value="square">square</option>
            </select>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

