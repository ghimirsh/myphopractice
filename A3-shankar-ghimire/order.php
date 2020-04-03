<!DOCTYPE html>
<!--
Shankar Ghimire
StudentId:991585190
Course: Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Order Result</title>
        <link rel="stylesheet" href="_css/styles.css">
    </head>
    <body>
        <?php

        // put your code here
        //function to check special characters
        function test_html_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $number_of_coffee = test_html_input($_POST['number_of_coffee']);
        $size = test_html_input($_POST['size']);
        $number_of_creams = test_html_input($_POST['number_of_creams']);
        $number_of_sugars = test_html_input($_POST['number_of_sugars']);

        function calculate_price($size, $quantity) {
            //rate for coffee
            $price_small = 2.0;
            $price_medium = 3.0;
            $price_large = 4.0;
            $price_extra_large = 5.0;
            $total_amount = 0;
            if ($size == "small") {
                $rate = $price_small;
            } else if ($size == "medium") {
                $rate = $price_medium;
            } else if ($size == "large") {
                $rate = $price_large;
            } else if ($size == "extra-large") {
                $rate = $price_extra_large;
            }
            $total_amount = $rate * $quantity;
            $total_amount = $total_amount + $total_amount * 0.13;
            $total_amount_formatted = "\$" . $rate . " x " . $quantity . " + tax = \$" . number_format($total_amount, 2);
            return $total_amount_formatted;
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
            <div id="main-content">
                <div id="header-box">
                    <h1 id="thank-header">
                        Thanks for your order. Here it is:
                    </h1>
                </div>
                <div class='picture-box'>

                    <?php
                    //  get_image();
                    //loop to repeat the image of cups of coffee
                    for ($i = 1; $i <= $number_of_coffee; $i++) {

                        //to determine the size of coffe cup
                        if ($size == "small") {
                            echo "<img src='_images/cup.jpg' width='50' alt='small cup image'>";
                        } else if ($size == "medium") {
                            echo "<img src='_images/cup.jpg' width='70' alt='middle cup image'>";
                        } else if ($size == "large") {
                            echo "<img src='_images/cup.jpg' width='90' alt='large cup image'>";
                        } else if ($size == "extra-large") {
                            echo "<img src='_images/cup.jpg' width='110' alt='large cup image'>";
                        }
                        //checks to add plus.jpg image is required or not
                        if ($number_of_creams > 0) {
                            echo "<img src='_images/plus.jpg' width='30' alt='plus image' >";
                            echo '&nbsp';
                            //loop to repeat the image of creams 
                            for ($j = 1; $j <= $number_of_creams; $j++) {
                                echo "<img src='_images/cream.jpg' width='50' alt='cream image' >";
                                echo '&nbsp';
                            }
                        }
                        //checks to add plus.jpg image is required or not
                        if ($number_of_sugars > 0) {
                            echo "<img src='_images/plus.jpg' width='30' alt='plus image' >";
                            echo '&nbsp';
                            //loop to repeat the image of creams 
                            for ($j = 1; $j <= $number_of_sugars; $j++) {
                                echo "<img src='_images/sugar.jpg' width='50' alt='sugar image' >";
                                echo '&nbsp';
                            }
                        }
                        echo "<br>";
                    }
                    ?>
                </div>
                <div id="price-box">
                    <p id="price">
                        <?php
                        echo "Total Cost : " . calculate_price($size, $number_of_coffee);
                        ?>
                    </p>
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
