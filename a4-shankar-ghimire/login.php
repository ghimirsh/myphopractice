<!DOCTYPE html>
<!--
Shankar Ghimire
StudentId:991585190
Course: ...............
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log In to System</title>
        <link rel="stylesheet" href="_css/main_style.css">
    </head>
    <body>
         <?php
            require_once 'header.php';
        ?>
        
        <?php
            $wrong_login_name="";
            $wrong_password = "";
            $login_information="";
                    // to display the message back to the user after log in attempt
                    if (isset($_REQUEST['login_result']))
                    {
                            if ($_REQUEST['login_result'] == "user_name_fail")
                            {
                                    //echo "<p>Login failed. Wrong username. Please try again.</p>";
                                 $login_information= "Login failed. Wrong username. Please try again.";
                            }
                            else if ($_REQUEST['login_result'] == "password_fail")
                            {
                                    //echo "<p>Login failed. Wrong Password.  Please try again.</p>";
                                     $login_information = "Login failed. Wrong Password.  Please try again.";
                            }
                    }
                ?>
        <div id="wrapper">
           <div id="home-main-wrapper">               
                <h2>Welcome to Log In Page!</h2>    
                <h3>Test User ID: guest</h3>
                <h3>Test User Password: guest</h3>
            
                <form id="login_form" clas="login_form" action="login1.php" method="post">
                    <table id="login-table" style="margin:0 auto; width:30%;">
                            <tr>
                                <td class="login-table-header" style="width: 40px;">Username:</td>
                                 <td>
                                     <input id="login_name" type="text" name="login_name" autofocus>
                                     <span id="login_name_error" class="error-message"></span>
                                 </td>
                            </tr>
                            <tr>
                                <td class="login-table-header" style="width: 40px;">Password:</td>
                                <td>
                                    <input id="login_password" type="password" name="login_password">
                                    <span id="login_password_error" class="error-message"></span>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" value="Login">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="color: red;font-weight: bold;">
                                <?php echo  $login_information;  ?>
                                </td>
                            </tr>
                    </table>
                </form>
                
                
            </div>
            
            
            <br><br><br><br><br><br><br><br>
        </div>
        <?php
        // put your code here
        ?>
        
        <?php
        require_once 'footer.php';
        ?>  
        <script src="_js/login_script.js"></script>
    </body>
</html>
