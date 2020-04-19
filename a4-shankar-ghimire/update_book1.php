<?php
    session_start();
    
    //echo "testing";
    //extracting text field values 
    $id=$_REQUEST['id'];
    $title = $_REQUEST['book_title'];
    $subject = $_REQUEST['subject'];
    $publisher = $_REQUEST['publisher'];
    $authors = $_REQUEST['authors'];
    $price = $_REQUEST['price'];
    
    
//    echo 'Tesging values';
//    echo "<br>Book ID :". $id;
//    echo "<br>Book Title: ". $title;
//    echo "<br>subject : " . $subject;
//    echo "<br> publisher : " . $publisher;
//    echo "<br> authors : " . $authors;
//    echo "<br> price : ". $price;
    //Testing success
    
    //includes MySQL connection configuration file
    require_once 'config.php';
    
    //SQL query
    $query = "update tblbooks set title='". $title ."', subject = '". $subject . "', publisher='". $publisher
            ."',authors='". $authors ."',price=". $price. " where id=". $id;
    
    //testing
    //echo "<br>sql query : " . $query;
    $result = mysqli_query($conn, $query);
    if($result == 1){
        header("location:viewrecords.php?update_result=success");
    }
    else{
        header("location:viewrecords.php?update_result=fail");
    }
?>
