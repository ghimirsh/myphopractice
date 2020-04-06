<?php
//echo "Testing";
    ob_start();//to avoid 'header's already sent ...' warning
    require_once 'config.php';
//    echo "testing";
    
    //extracts data of books from insert.php 
    $book_title=$_REQUEST['booktitle'];
    $subject=$_REQUEST['subject'];
    $publisher=$_REQUEST['publisher'];
    $authors = $_REQUEST['authors'];
    $price = $_REQUEST['price'];
    
    
    $is_valid="ok";
   
    //inserts book info into the tblbook table in database
    $query = "insert into tblbooks(title, subject, publisher, authors, price)"
            ."values ('" . $book_title .  "','" . $subject . "','" . $publisher . "','" . $authors. "'," . $price .");";
    $result = mysqli_query($conn, $query);
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
