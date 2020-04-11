<?php
//echo "Testing";
    ob_start();//to avoid 'header's already sent ...' warning
    require_once 'config.php';
    
    
    //extracts data of books from insert.php 
    $book_title=$_REQUEST['book_title'];
    $subject=$_REQUEST['subject'];
    $publisher=$_REQUEST['publisher'];
    $authors = $_REQUEST['authors'];
    $price = $_REQUEST['price'];
    
//    echo "<br>Book Title :". $book_title;
//    echo "<br>Subject :". $subject;
//    echo "<br>Publisher ". $publisher;
//    echo "<br>Author :". $authors;
//    echo "<br>Price :". $price;
    $is_valid="ok";
//   echo "testing";
//   
    //inserts book info into the tblbook table in database
    $query = "insert into tblbooks(title, subject, publisher, authors, price)"
            ."values ('" . $book_title .  "','" . $subject . "','" . $publisher . "','" . $authors. "'," . $price .");";
    
//    echo "<br>Query : " . $query;
//    echo "<br>Connection : " . $conn;
//    echo "<br>Testing";
    $result = mysqli_query($conn, $query);
    echo "<br>result: ". $result;
    echo "<br>Testing";
    // check if 1 record was added
    if ($result > 0)
    {
            // success
            header("Location:insert.php?result=success");
    } 
    else
    {
            // fail
            header("Location:insert.php?result=fail");
    }
?>
