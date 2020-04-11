/* 
 * Shankar Ghimire
 * StudentId:991585190
 * Course: ...............
 */
var book_entry = document.getElementById("book_entry");
var book_title = document.getElementById("book_title");
var price = document.getElementById("price");


book_entry.onsubmit = function(){
    //alert ("testing from onsubmit() function");
    return validate_book();
};
var validate_book = function(){
    //alert("testing from validate_book() function");
  var is_valid = true;
  var b_title = book_title.value;
  //alert("Book Title : " + b_title);
  var b_price = price.value;
  //alert("Price : " + b_price);
  //alert ("testing");

  //alert("book title : " + b_title + "\n price : " + b_price);

    document.getElementById("book_title_error").innerHTML="";
    document.getElementById("price_error").innerHTML="";
   
  if(b_title == "" || b_title.length == 0){
      //alert("testing for blank title from inside if block");
      document.getElementById("book_title_error").innerHTML="Book Title cannot be blank!";
      is_valid=false;
      //alert("testing for blank book title");
  }
  else if(b_price === "" || b_price.length === 0){
      document.getElementById("price_error").innerHTML="Price cannot be empty!";
      is_valid  = false;
      //alert("testing for blank for price.");
  }
  else if(isNaN(b_price)){
      document.getElementById("price_error").innerHTML="Price should be numeric value!";
      is_valid  = false;
      //alert("testing for numeric value for price");
  }
  //alert (is_valid);
  return is_valid;
};







