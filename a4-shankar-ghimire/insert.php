<?php
    session_start();
?>
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
        <?php
            require_once 'header.php';
        ?>
        <div class="wrapper">

            <div class="home-main-wrapper">
                                      
            </div>
            <div id="insert-form-box">
                <?php
                if (!isset($_SESSION['username'])){
                    //echo "User name is : " . $_SESSION['username'];
                    echo "<h1>Access denied</h1>";
                    echo "<h2>Please, Log in to enable this page</h2>";
                }                
                else {
                    //echo "User name is : " . $_SESSION['username'];
                    echo "Hello, " . $_SESSION['username'];
                    echo "<h1>Welcome to Insert Page!</h1> ";
                    echo "<form action = 'insert1.php' method ='post'>";
                    echo "<table style = 'margin:0 auto; width:30%;'>";
                    echo "<tr>";
                    echo "<td>Book Title:</td>";
                    echo "<td><input type = 'text' name = 'booktitle' size = '50' autofocus></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Subject:</td>";
                    echo "<td><input type = 'text' name = 'subject'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Publisher:</td>";
                    echo "<td><input type = 'text' name = 'publisher'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Author(s):</td>";
                    echo "<td><input type = 'text' name = 'authors'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Price:</td>";
                    echo "<td><input type = 'text' name = 'price'></td>";
                    echo "</tr>";
                    echo "<tr><td colspan = '2'><input type = 'submit' value = 'Insert Record'></td></tr>";

                    echo" <tr>";
                    echo "<td colspan = '2' style = 'text-align:center;'>";
                    //echo "<h1> result is : " . $_REQUEST['result'] . "</h1>";
                    echo "<br>";
                    //if (isset($_REQUEST['result'])) {
                        if (is_null($_REQUEST['result']) || $_REQUEST['result'] == "") {
                            echo "";
                        } 
                        else if ($_REQUEST['result'] == "success") {
                            echo "Record has been successfully added!";
                        } else if ($_REQUEST['result'] == "fail") {
                            echo "Something went wrong. Record not added.";
                        }
                        unset($_REQUEST['result']);
                    //}

                    echo "</td>";
                    echo "</tr>";

                    echo "</table>";
                    echo "</form>";
                }//end of if block that check $_SESSION has started or not
              
                ?>

                </div>
                <br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br>


            </div>  
            <?php
            require_once 'footer.php';
            ?>  
    </body>
</html>
