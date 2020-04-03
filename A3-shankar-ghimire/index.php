<!DOCTYPE html>
<!--
Shankar Ghimire
StudentId:991585190
Course: Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Order your Favorite Coffee</title>
        <link rel="stylesheet" href="_css/styles.css">
        <script src="_js/script.js" defer></script>
    </head>
    <body>
        <?php
        //server side data validation
        $isValid = true;
        $number_of_coffee = $_POST['number_of_cofee'];
        $number_of_coffee_error = "";
        if (isset($_POST['submit'])) {
            if (empty($number_of_coffee)) {
                $isValid = false;
                $number_of_coffee_error = "Cannot be blak!";
            } else if (is_numeric($number_of_coffee)) {
                $isValid = false;
                $number_of_coffee_error = "Must be numeric value!";
            } else if ($number_of_coffee == 0) {
                $isValid = false;
                $number_of_coffee_error = "Zero cannot be order quantity!";
            } else if ($number_of_coffee < 0) {
                $isValid = false;
                $number_of_coffee_error = "Cannot be negative value!";
            }
        }
        ?>
        <div id="container">
            <div id="main-header">
                <div id="">
                    <img src="_images/logo-en.png" width="150" alt="company logo image">
                </div>
                <div id="comany-header">
                    <h1>Starbucks Coffee House</h1>
                </div>

            </div>
            <hr>
            <div id="order-box">
                <div id="logo-box">
                    <!--<img id="logo-image" src="_images/logo-en.png" alt="Company Logo">-->

                </div>
                <div id="header-box">
                    <h1 id="welcome-header">Welcome to Starbucks's!</h1>
                </div>
                <div id='form-box'>
                    <p id='order-details'>Give us some numbers...</p>
                    <div id="data-box">
                        <form action="order.php" method="POST" id='coffee-order-form' name='coffee_order_form'>
                            <label class="data-label" for="number-of-coffee">Number of Coffees: </label>
                            <input class="data-input" type="text" id="number-of-coffee" name="number_of_coffee" 
                                   value="<?php echo $number_of_cofee_error; ?>">
                            <span class="error-message" id="number-of-coffee-error"><?php echo $coffee_error; ?></span><br>
                            <label class="data-label">Size:  </label> 
                            <select id="size" class="data-input" name="size">
                                <option value="-1">Coffee Size</option>
                                <option value="small" selected>Small</option>
                                <option value="medium" >Medium</option>
                                <option value="large" >Large</option>
                                <option value="extra-large" >Extra Large</option>
                            </select>

                            <span class="error-message" id="size-error" class="error-message"></span><br>
                            <label class="data-label">How many creams?: </label>
                            <input class="data-input" type="number" min="0" max="10" id="number-of-creams" 
                                   name="number_of_creams" value="0">


                            <span id="cream-error" class="error-message"></span><br>
                            <label class="data-label">How many sugars?:  </label>
                            <input class="data-input" type="number" min="0" max="10" id="number-of-sugars"
                                   name="number_of_sugars" value="0">


                            <span id="cream-error" class="error-message"></span><br>
                            </div>
                            <label class="data-label">&nbsp;</label><input id="submit1" type="submit"  name="submit" value="Submit">
                            <br>
                        </form>
                    </div>
                </div>
                <div id="footer-box">
                    <div>
                        <p1>&copy;2019-<?php echo date(Y); ?>
                    </div>
                </div>
            </div>  
    </body>
</html>
