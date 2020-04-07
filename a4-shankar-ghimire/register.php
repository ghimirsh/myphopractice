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
        <!--<script src="_js/script.js" defer></script>-->
        <title></title>
    </head>
    <body>
        <?php
        require_once 'header.php';
        ?>
           <?php
            //to display the user back to the user
           $new_user_name = "";
           $username_error="";
           $password_error="";
           $confirm_password_error = "";
           $record_insert_message ="";
            if (isset($_REQUEST['result'])) {
                if ($_REQUEST['result'] == "userexists") {
                    $record_insert_message = "This User name is already taken up. Please try again";
                    //echo "<p> This User name is already taken up. Please try again.</p>";
                } else if ($_REQUEST['result'] == "success") {
                    $record_insert_message = "New user was registered.";
                    //echo '<p>New user was registered</p>';
                } else if ($_REQUEST['result'] == "fail") {
                    $record_insert_message = "New user was not registered.<br> Something went wrong.<br> Try again, please.";
                    //echo "<p>New user was not registered</p>";
                }else if($_REQUEST['result'] == "validation_fail"){
                    $new_user_name= $_SESSION['new_user_name'];
                    $username_error = $_SESSION['username_error'];
                    $password_error = $_SESSION['password_error'];
                    $confirm_password_error = $_SESSION['confirm_password_error'];
                    unset($_SESSION['new_user_name']);
                    unset($_SESSION['username_error']);
                    unset($_SESSION['password_error']);
                    unset($_SESSION['confirm_password_error']);
                }
            }
            
            ?>
        <div class="wrapper">

            <div class="home-main-wrapper">
                
                <h2>New User Register</h2>
                <?php
//                echo "<br>user name error". $username_error;
//            echo "<br>password error" . $password_error;
//            echo "<br> confirm password error ". $confirm_password_error;
                ?>
                <form id='userregistration' action="register1.php" method="post">
                    <table class='register-table'>
                        <tr class="register-row">
                            <td>Username:</td>
                            <td>
                                <input id='username' type="text" name="username" value="<?=$new_user_name; ?>" autofocus>
                                <span id='usernameerror' class='error-message'><?php echo $username_error; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td>
                                <input id='password' type="password" name="password">
                                <span id='passworderror' class='error-message'><?php echo $password_error; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Confirm Password:</td>
                            <td>
                                <input id='confirmpassword' type="password" name="confirmpassword">
                                <span id='confirmpassworderror' class='error-message'><?php echo $confirm_password_error; ?></span>
                            </td>
                        </tr>
                        <tr ><td colspan="2" style="text-align: center;"><input type="submit" value="Register"></td></tr>
                        <tr>
                            <td colspan="2" style="font-weight: bold;">
                                <?php
                                    echo $record_insert_message;
                                ?>
                            </td> 
                        </tr>
                        
                        
                    </table>
                </form>
            </div>
            <?php
                //clears the variables after printing
                $new_user_name = "";
                //$username_error = "";
                //$password_error = "";
                //$confirm_password_error = "";
            ?>
            <br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br>


        </div>  
        <?php
        require_once 'footer.php';
        ?>  
    </body>
</html>
