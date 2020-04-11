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
                <h1>Welcome to Insert Page!</h1>                         
            </div>
            <div id="insert-form-box">
                <?php
                    if(!isset($_SESSION['user_name'])){
                        echo "Access denied";
                    }
                    else{
                        echo "Welcome, ". $_SESSION['user_name'];
                    }
                ?>
<!--                <form action="inser1.php" method="post">
                    <table style="margin:0 auto; width:30%;">
                        <tr>
                            <td>Book Title:</td>
                            <td><input type="text" name="booktitle" size="50" autofocus></td>
                        </tr>
                        <tr>
                            <td>Subject:</td>
                            <td><input type="text" name="subject"></td>
                        </tr>
                         <tr>
                            <td>Publisher:</td>
                            <td><input type="text" name="publisher"></td>
                        </tr>
                        <tr>
                            <td>Author(s):</td>
                            <td><input type="text" name="authors"></td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td><input type="text" name="price"></td>
                        </tr>
                        <tr><td colspan="2"><input type="submit" value="Insert Record"></td></tr>
                        
                        <tr>
			<td colspan="2" style="text-align:center;">
                            <?php
                            if (isset($_REQUEST['result'])) {
                                if ($_REQUEST['result'] == "success") {
                                    echo "Record has been successfully added!";
                                } else if ($_REQUEST['result'] == "fail") {
                                    echo "Something went wrong. Record not added.";
                                }
                            }
                            ?>
			</td>
		</tr>

                    </table>
                </form>-->
            </div>
            <br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br>
           
            
        </div>  
      <?php
        require_once 'footer.php';
        ?>  
    </body>
</html>
