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
                
                <h2>Welcome to Log In Page!</h2>    
                <p>Test User ID: test</p>
                <p>Test User Password: test</p>
            </div>
            <div id="login-form-box">
                <form action="login1.php" method="post">
                    <table style="margin:0 auto; width:30%;">
                        <tr>
                            <td>Username:</td>
                            <td><input type="text" name="user_name" autofocus></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr style="text-align: center;"><td colspan="2"><input type="submit" value="Login"></td></tr>
                    </table>
                </form>
                <?php
		// to display the message back to the user after log in attempt
		if (isset($_REQUEST['result']))
		{
			if ($_REQUEST['result'] == "fail")
			{
				echo "<p>Login failed. Either username or password is incorrect. 
						Please try again.</p>";
			}
		}
	?>

            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>  
      <?php
        require_once 'footer.php';
        ?>  
    </body>
</html>
