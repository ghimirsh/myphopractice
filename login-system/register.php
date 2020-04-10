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
        <link rel="stylesheet" href="_css/style.css">
    </head>
    <body>
        <div class="main-content">
              <?php
                require_once 'header.php';
            ?>
            <div>                         
                <h2>Register</h2>
            </div>
	<form action="" method="post" id="userregisterform" name="userregisterform">
		<table id='register-table'>
			<tr>
				<td>Username:</td>
				<td><input id="username" name="username" type="text" name="username" autofocus>
                                    <span id="usernameerror"></span>
                                </td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input id="password" name="password" type="password" name="password">
                                    <span id="passworderror"></span>
                                </td>
			</tr>
			<tr><td colspan="2"><input type="submit" value="Register"></td></tr>
		</table>
	</form>
            
        </div>
        <div>
            <p id="testform">
                
            </p>
        </div>
        <?php
            //to display the user back to the user
        if(isset($_REQUEST['result'])){
            if($_REQUEST['result'] == "userexists"){
                echo "<p> This User name is already taken up. Please try again.</p>";
            }
            else if($_REQUEST['result'] == "success"){
                echo '<p>New user was registered</p>';
            }
            else if($_REQUEST['result'] == "fail"){
                echo "<p>New user was not registered</p>";
            }
        }
        ?>
        <script src="_js/script1.js"></scirpt>
    </body>
</html>
