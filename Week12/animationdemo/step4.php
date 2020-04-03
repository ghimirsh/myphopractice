<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <?php
        $h=$_SESSION["hvalue"];
        $s=$_SESSION["svalue"];
        $l=$_SESSION["lvalue"];
        ?>
    <style>
        #circle
        {
        position: relative;
        margin: .5em auto;
        padding: 2em;
        width: 10em; 
        height: 10em;
        border-radius: 50%;
        /*transform: rotate(-4deg) rotateY(15deg);*/
        background: #629bdd;
        font: "Century Gothic", Verdana, sans-serif;
        font-size: 3em;
        color:red;
        /*color: hsl(<?=$h?>,<?=$s?>,<?=$l?>);*/
        text-align: center;
        }
        #square
        {
        position: relative;
        margin: .5em auto;
        padding: 1em;
        width: 10em; 
        height: 4em;
        border-radius: .25em;
        transform: rotate(-20deg) rotateY(15deg);
        background: #629bdd;
/*        font: 2em/4 Century Gothic, Verdana, sans-serif;*/
        font: "Century Gothic", Verdana, sans-serif;
        font-size: 3em;
        text-align: center;
        /*color: hsl(<?=$h?>,<?=$s?>,<?=$l?>);*/
        color:red;
        font-weight: bold;
        }
    </style>
    <body>
        <?php
        $_SESSION["circleSquare"] = $_GET["circleSquare"];
        $opt1=$_SESSION["circleSquare"];
        $name=$_SESSION['name'];
        ?>
       <div id="<?=$opt1?>">
           <?=$name?>
       </div>
       
        <?php
        session_destroy();
        ?>
    </body>
</html>
