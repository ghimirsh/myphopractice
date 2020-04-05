<?php
    // start the session
    session_start();
    
    // initialize the variables
    $result = "";
    $userInput = 0;
    
    // if the page loads for the very first time
    if ($_SERVER['REQUEST_METHOD'] == "GET")
    {
        // generate a random number between 1 and 9, both inclusive
        $_SESSION['randomNum'] = mt_rand(1, 9);
    }
    else    // if the page loads as a result of button click
    {
        // read the user input
        $userInput = $_REQUEST['num'];
        
        // check if the user's input is equal, smaller or greater than the random number
        if ($userInput == $_SESSION['randomNum'])
        {
            $result = "You found the number";
        }
        else if ($userInput < $_SESSION['randomNum'])
        {
            $result = "Your number is smaller than the random number";
        }
        else
        {
            $result = "Your number is greater than the random number";
        }
    }
    
    // if the 'Play Again' button is clicked
    if (isset($_REQUEST['btnPlayAgain']))
    {
        // remove all the data from the session
        session_unset();
        
        // re-generate the random number
        $_SESSION['randomNum'] = mt_rand(1, 9);
        
        // reset the user's input back to zero
        $userInput = 0;
        $result = "";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Guessing Game using Session</title>
    </head>
    <body>
        <h1>Number Guessing Game</h1>
        
        <form action="" method="post">
            Guess the number between 1 and 9 (both inclusive):
            <input type="number" min="1" max="9" name="num" id="num" value="<?php echo $userInput; ?>" autofocus>
            
            <br><br>
            <input type="submit" name="btnGuess" value="Guess">
            <input type="submit" name="btnPlayAgain" value="Play Again">
        </form>
        
        <h3><?php echo $result; ?></h3>
        
        <script>
            //  select the text in the number field
            document.getElementById("num").select();
        </script>
    </body>
</html>
