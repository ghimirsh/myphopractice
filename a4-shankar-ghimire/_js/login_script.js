/* 
 * Shankar Ghimire
 * StudentId:991585190
 * Course: ...............
 */
var login_form = document.getElementById("login_form");
var login_name = document.getElementById("login_name");
var login_password = document.getElementById("login_password");


login_form.onsubmit = function(){
    //alert ("testing from onsubmit() function");
    return validate_login();
};
var validate_login = function(){
     var is_valid = true;
    //alert("testing from validate_book() function");
    var l_name = login_name.value;
    var l_password = login_password.value;
    
    //alert ("testing");
    //alert("Log Id: " + l_name + "\n Password : " + l_password);

    document.getElementById("login_name_error").innerHTML="";
    document.getElementById("login_password_error").innerHTML="";
   
  if(l_name == "" || l_name.length == 0){
      //alert("testing for blank title from inside if block");
      document.getElementById("login_name_error").innerHTML="LogIn ID cannot be blank!";
      is_valid=false;
      //alert("testing for blank login id.");
  }
  else if(l_password === "" || l_password.length === 0){
      document.getElementById("login_password_error").innerHTML="Password cannot be empty!";
      is_valid  = false;
      //alert("testing for blank for password.");
  }
  //alert (is_valid);
  return is_valid;
};


