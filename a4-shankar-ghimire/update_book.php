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
        <title>Book Details Records</title>
        <link rel="stylesheet" href="_css/main_style.css">
        
    </head>
    <body>
          <?php
          //echo "<h1>testing</h1>";
            require_once 'header.php';
        ?>
        <div class="wrapper">
     
            <div class="home-main-wrapper">
                
                <?php
                if (!isset($_SESSION['user_name'])) {
                    //echo "User name is : " . $_SESSION['username'];
                    echo "<h1>Access denied</h1>";
                    echo "<h2>Please, Log in to enable this page</h2>";
                } 
                else {
                    
                    echo "<h4>Hello, ". $_SESSION['user_name']. "</h4>";
                    echo "<h2>Update Book Records </h2>";
                    //to make connection with the database
                    require_once 'config.php';
                    
                    $id = $_REQUEST['id'];
                    //echo "<h3>for testing:  bookid is : ". $id . "</h3>";      
                    $query = "select * from tblbooks where id=$id";
                    $result = mysqli_query($conn, $query);
                    if($result == 1){
                        $row = mysqli_fetch_assoc($result);
                        echo "<form id='update_book' name='update_book' action ='update_book1.php?id=". $id  ."' method ='post'>";
                        echo "<table style = 'margin:0 auto; width:50%;'>";
                        echo "<tr>";
                        echo "<td>Book Title:</td>";
                        echo "<td>";
                        echo "<input type = 'text' id='book_title' name = 'book_title' size = '50' value='". $row['title']. " ' autofocus>";
                        echo "<span id='book_title_error' class='error_message' style='color:red;font-weight:bold;'></span>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Subject:</td>";
                        echo "<td><input type = 'text' id='subject' name = 'subject' value='". $row['subject']. "'></td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Publisher:</td>";
                        echo "<td><input type = 'text' id='publisher' name = 'publisher' value='". $row['publisher']. "'></td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Author(s):</td>";
                        echo "<td><input type = 'text' id='authors' name = 'authors' value='". $row['authors']. "'></td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Price:</td>";
                        echo "<td>";
                        echo "<input type = 'text' id='price' name = 'price' value='". $row['price']. "'>";
                        echo "<span id='price_error' class='price_error' style='color:red;font-weight:bold;'></span>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr><td colspan = '2'><input type = 'submit' value = 'Update Record'></td></tr>";

                        echo" <tr>";
                        echo "<td colspan = '2' style = 'text-align:center;'>";
                        //echo "<h1> result is : " . $_REQUEST['result'] . "</h1>";
                        echo "<br>";
//                        if (isset($_REQUEST['result']) ) {
//                            //echo "testing";
//                            if (is_null($_REQUEST['result']) || $_REQUEST['result'] == "") {
//                                echo "";
//                            } 
//                            else if ($_REQUEST['result'] == "success") {
//                                echo "Record has been successfully added!";
//                            } else if ($_REQUEST['result'] == "fail") {
//                                echo "Something went wrong. Record not added.";
//                            }
//                            unset($_REQUEST['result']);
//                        }

                        echo "</td>";
                        echo "</tr>";

                        echo "</table>";
                        echo "</form>";
                    }
                    else
                    {
                        echo "<h2>Something went wrong! Could not open update record page!</h2>";
                        echo '<h3>Please, contact the Admin.</h3>';
                    }
                    
                }//end of if block that check $_SESSION has started or not
                ?>
            </div>
            
            <br><br><br><br><br><br><br>
           
            
        </div>  
      <?php
        require_once 'footer.php';
        ?>  
    </body>
</html>
