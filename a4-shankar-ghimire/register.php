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
        <div class="wrapper">

            <div class="home-main-wrapper">
                
                <h2>New User Register</h2>
                <form id='userregistration' action="register1.php" method="post">
                    <table class='register-table'>
                        <tr class="register-row">
                            <td>Username:</td>
                            <td><input id='username' type="text" name="username" autofocus><span id='username-error' class='error-message'></span></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input id='password' type="password" name="password"><span id='password-error' class='error-message'></td>
                        </tr>
                        <tr>
                            <td>Confirm Password:</td>
                            <td><input id='confirmpassword' type="password" name="confirmpassword"><span id='confirmpassword-error' class='error-message'></td>
                        </tr>
                        <tr ><td colspan="2" style="text-align: center;"><input type="submit" value="Register"></td></tr>
                    </table>
                </form>
            </div>
            <?php
            //to display the user back to the user
            if (isset($_REQUEST['result'])) {
                if ($_REQUEST['result'] == "userexists") {
                    echo "<p> This User name is already taken up. Please try again.</p>";
                } else if ($_REQUEST['result'] == "success") {
                    echo '<p>New user was registered</p>';
                } else if ($_REQUEST['result'] == "fail") {
                    echo "<p>New user was not registered</p>";
                }
            }
            ?>
            <br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br>


        </div>  
        <?php
        require_once 'footer.php';
        ?>  
    </body>
</html>
