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
                    echo "<h2>Book Records </h2>";
                    //to make connection with the database
                    require_once 'config.php';
                    
                    $query = "select * from tblbooks";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        // print table and header row
                        echo "<div class='table-box'>";
                        echo "<div class='table-holder'>";
                        echo "<table id='books'>";
                        echo "<tr>";
                        //echo "<th>S.N.</th>";
                        echo "<th>Book ID</th>";
                        echo "<th>Book Title</th>";
                        echo "<th>Subject</th>";
                        echo "<th>Publisher</th>";
                        echo "<th>Authoer(s)</th>";
                        echo "<th>Price</th>";
                        echo "</tr>";
                        $i = 1;     // To print the row numbers
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            //echo "<td>$i</td>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['subject'] . "</td>";
                            echo "<td>" . $row['publisher'] . "</td>";
                            echo "<td>" . $row['authors'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "</tr>";
                            $i++;
                         }//end of while loop
                         echo "<tr>";
                         echo "<td colspan='6' style='text-align:center';>". $i   ." Record(s) found.</td>";
                         echo "</tr>";
                        echo "</table>";
                        echo "</div>";
                        echo"</div>";
                    }//end of if
                    else{
                        echo"<h2>No records found in the database!</h2>";
                    }
                }
                ?>
            </div>
            
            <br><br><br><br><br><br><br>
           
            
        </div>  
      <?php
        require_once 'footer.php';
        ?>  
    </body>
</html>
