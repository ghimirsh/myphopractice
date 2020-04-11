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
        <link rel="stylesheet" type="text/css" href="_css/main_style.css">
    </head>
    <body>
        <div class="wrapper">       
            <div class="header-main-content">
                <div>
                    <div class="company-logo">
                        <img src="">
                    </div>
                    <div class="company-name">
                        <h1 id="comany-name">ABC Tech. Pvt. Ltd.</h1>
                        <?php 
                        //echo basename($_SERVER['PHP_SELF'],'.php'); 
                        //extracts the current php file name from the address bar
                            $selected_page = basename($_SERVER['PHP_SELF'],'.php');
                        ?>
                    </div>
                    <nav>
                        <?php
                            echo "<ul>";      
                            if($selected_page == "index"){
                                echo "<li style='padding:0 2px;' ><a  id='selected' href='index.php'>Home</a></li>";
                                echo "<li style='padding:0 2px;' ><a  href='register.php'>Register</a></li>";
                                if(!isset($_SESSION['user_name'])){
                                    echo "<li style='padding:0 2px;'><a  href='login.php'>Log In</a></li>";
                                }
                                else{
                                    echo "<li style='padding:0 2px;'><a  href='logout.php'>Log Out</a></li>";
                                }
                                
                                echo "<li style='padding:0 2px;'><a href='insert.php'>Insert Record</a></li>";
                                echo "<li style='padding:0 2px;' ><a href='viewrecords.php'>View Records</a></li>";
                                echo "<li style='padding:0 2px;'><a href='contactus.php'>Contact Us</a></li>";    
                            }
                            else if($selected_page == "register"){
                                echo "<li style='padding:0 2px;'><a  href='index.php'>Home</a></li>";
                                echo "<li style='padding:0 2px;'><a id='selected' href='register.php'>Register</a></li>";
                                //echo "<li style='padding:0 2px;'><a href='login.php'>Log In</a></li>";
                                if(!isset($_SESSION['user_name'])){
                                    echo "<li style='padding:0 2px;'><a  href='login.php'>Log In</a></li>";
                                }
                                else{
                                    echo "<li style='padding:0 2px;'><a  href='logout.php'>Log Out</a></li>";
                                }
                                echo "<li style='padding:0 2px;'><a href='insert.php'>Insert Record</a></li>";
                                echo "<li style='padding:0 2px;'><a href='viewrecords.php'>View Records</a></li>";
                                echo "<li style='padding:0 2px;'><a href='contactus.php'>Contact Us</a></li>";  
                            }
                            else if($selected_page == "login"){
                                echo "<li style='padding:0 2px;'><a  href='index.php'>Home</a></li>";
                                echo "<li style='padding:0 2px;'><a  href='register.php'>Register</a></li>";
                                //echo "<li style='padding:0 2px;'><a id='selected' href='login.php'>Log In</a></li>";
                                if(!isset($_SESSION['user_name'])){
                                    echo "<li style='padding:0 2px;'><a id='selected' href='login.php'>Log In</a></li>";
                                }
                                else{
                                    echo "<li style='padding:0 2px;'><a  href='logout.php'>Log Out</a></li>";
                                }
                                echo "<li style='padding:0 2px;'><a href='insert.php'>Insert Record</a></li>";
                                echo "<li style='padding:0 2px;'><a href='viewrecords.php'>View Records</a></li>";
                                echo "<li style='padding:0 2px;'><a href='contactus.php'>Contact Us</a></li>";  
                            }
                            else if($selected_page == "insert"){
                                echo "<li style='padding:0 2px;'><a  href='index.php'>Home</a></li>";
                                echo "<li style='padding:0 2px;'><a  href='register.php'>Register</a></li>";
                                //echo "<li style='padding:0 2px;'><a  href='login.php'>Log In</a></li>";
                                if(!isset($_SESSION['user_name'])){
                                    echo "<li style='padding:0 2px;'><a  href='login.php'>Log In</a></li>";
                                }
                                else{
                                    echo "<li style='padding:0 2px;'><a  href='logout.php'>Log Out</a></li>";
                                }
                                echo "<li style='padding:0 2px;'><a id='selected' href='insert.php'>Insert Record</a></li>";
                                echo "<li style='padding:0 2px;'><a href='viewrecords.php'>View Records</a></li>";
                                echo "<li style='padding:0 2px;'><a href='contactus.php'>Contact Us</a></li>";  
                            }
                            else if($selected_page == "viewrecords"){
                                echo "<li style='padding:0 2px;'><a  href='index.php'>Home</a></li>";
                                echo "<li style='padding:0 2px;'><a  href='register.php'>Register</a></li>";
                                //echo "<li style='padding:0 2px;'><a  href='login.php'>Log In</a></li>";
                                if(!isset($_SESSION['user_name'])){
                                    echo "<li style='padding:0 2px;'><a  href='login.php'>Log In</a></li>";
                                }
                                else{
                                    echo "<li style='padding:0 2px;'><a  href='logout.php'>Log Out</a></li>";
                                }
                                echo "<li style='padding:0 2px;'><a  href='insert.php'>Insert Record</a></li>";
                                echo "<li style='padding:0 2px;'><a id='selected' href='viewrecords.php'>View Records</a></li>";
                                echo "<li style='padding:0 2px;'><a href='contactus.php'>Contact Us</a></li>";  
                            }
                            else if($selected_page == "contactus"){
                                echo "<li style='padding:0 2px;'><a  href='index.php'>Home</a></li>";
                                echo "<li style='padding:0 2px;'><a  href='register.php'>Register</a></li>";
                                //echo "<li style='padding:0 2px;'><a  href='login.php'>Log In</a></li>";
                                if(!isset($_SESSION['user_name'])){
                                    echo "<li style='padding:0 2px;'><a  href='login.php'>Log In</a></li>";
                                }
                                else{
                                    echo "<li style='padding:0 2px;'><a  href='logout.php'>Log Out</a></li>";
                                }
                                echo "<li style='padding:0 2px;'><a  href='insert.php'>Insert Record</a></li>";
                                echo "<li style='padding:0 2px;'><a  href='viewrecords.php'>View Records</a></li>";
                                echo "<li style='padding:0 2px;'><a id='selected' href='contactus.php'>Contact Us</a></li>";  
                            }
                            else if($selected_page == "logout"){
                                echo "<li style='padding:0 2px;'><a  href='index.php'>Home</a></li>";
                                echo "<li style='padding:0 2px;'><a  href='register.php'>Register</a></li>";
                                //echo "<li style='padding:0 2px;'><a  href='login.php'>Log In</a></li>";
                                if(!isset($_SESSION['user_name'])){
                                    echo "<li style='padding:0 2px;'><a  href='login.php'>Log In</a></li>";
                                }
                                else{
                                    echo "<li style='padding:0 2px;'><a id='selected' href='logout.php'>Log Out</a></li>";
                                }
                                echo "<li style='padding:0 2px;'><a  href='insert.php'>Insert Record</a></li>";
                                echo "<li style='padding:0 2px;'><a  href='viewrecords.php'>View Records</a></li>";
                                echo "<li style='padding:0 2px;'><a  href='contactus.php'>Contact Us</a></li>";  
                            }
                            echo "</ul>";
                        ?>
                    </nav>
                </div>
            </div>
        </div>
        <?php
        // put your code here
        
        
        ?>
        
    </body>
</html>
