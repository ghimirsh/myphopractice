<?php
    session_start();
    
    //echo "testing";
    //extracting text field values 
    $id=$_REQUEST['id'];

    
    
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
    $query = "delete from tblbooks  where id=". $id;
    
    //testing
    //echo "<br>sql query : " . $query;
    $result = mysqli_query($conn, $query);
    if($result == 1){
        header("location:viewrecords.php?delete_result=success");
    }
    else{
        header("location:viewrecords.php?delete_result=fail");
    }
    
?>

