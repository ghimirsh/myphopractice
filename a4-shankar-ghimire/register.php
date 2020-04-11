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
        <link rel="stylesheet" href="_css/main_style.css">
        <script src="_js/script.js" defer></script>
        <title></title>
    </head>
    <body>
        <?php
        require_once 'header.php';
        ?>
           <?php
            //to display the user back to the user
           $new_user_name = "";
           $user_name_error="";
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
                    $user_name_error = $_SESSION['user_name_error'];
                    $password_error = $_SESSION['password_error'];
                    $confirm_password_error = $_SESSION['confirm_password_error'];
                    unset($_SESSION['new_user_name']);
                    unset($_SESSION['user_name_error']);
                    unset($_SESSION['password_error']);
                    unset($_SESSION['confirm_password_error']);
                }
            }
            
            ?>
        <div class="wrapper">

            <div class="home-main-wrapper">
                
                <h2>New User Register</h2>
                <?php
//                echo "<br>user name error". $user_name_error;
//            echo "<br>password error" . $password_error;
//            echo "<br> confirm password error ". $confirm_password_error;
                ?>
                <form id="user_registration" name="user_registration" action="register1.php" method="post">
                    <table class='register-table'>
                        <tr class="register-row">
                            <td class="register-row-header">
                                Username:
                            </td>
                            <td class="register-row-input">
                                <input id="user_name" type="text" name="user_name" value="<?=$new_user_name; ?>" autofocus>                                                        
                                <span id="user_name_error" class="error_message" style="color:red;font-weight: bold;" ><?php echo $user_name_error; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="register-row-header">
                                Password:
                            </td>
                            <td class="register-row-input">
                                <input id="password" type="password" name="password">
                                <span id='password_error' class="error_message" style="color:red;font-weight: bold;"><?php echo $password_error; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="register-row-header">
                                Confirm Password:
                            </td>
                            <td>
                                <input id='confirm_password' type="password" name="confirm_password">
                                <span id='confirm_password_error' class='error_message' style="color:red;font-weight: bold;"><?php echo $confirm_password_error; ?></span>                   
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Register"></td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td>
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
                //$user_name_error = "";
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
