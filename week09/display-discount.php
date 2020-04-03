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
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="content">
            <h1>Product Discount Calculator</h1>
            <label>Product Description:</label>
            <span><?php echo $_POST['prod_desc'] ?></span>
            <br>

            <label>List Price:</label>
            <span><?php echo $_POST['list_price'] ?></span>
            <br>

            <label>Standard Discount:</label>
            <span><?php echo $_POST['discount_percent'] ?></span>
            <br>

            <label>Discount Amount:</label>
            <span><?php
                $list_price = $_POST['list_price'];
                $discount_percent = $_POST['discount_percent'];
                $discount_amount = $list_price - $list_price * $discount_percent / 100;
                echo $discount_amount;
                ?></span>
            <br>

            <label>Discount Price:</label>
            <span><?php echo $list_price - $discount_amount; ?></span>
            <br>
        </div>
    </body>
</html>
