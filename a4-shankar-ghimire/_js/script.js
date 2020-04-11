/* 
 * Shankar Ghimire
 * StudentId:991585190
 * Course: ...............
 */
var user_registration= document.getElementById("user_registration");
var user_name=document.getElementById("user_name");
var password = document.getElementById("password");
var confirm_password= document.getElementById("confirm_password");
//extracting span ids


var confirm_password_error = document.getElementById("confirm_password_error");
user_registration.onsubmit = function(){
    //alert ("testing");
    return validate_register();
};
var validate_register = function(){
    //alert("testing");
  var is_valid = true;
  var u_name = user_name.value;
  //alert("user name : " + u_name);
  var u_password = password.value;
  //alert("Password : " + u_password);
  //alert ("testing");
  var u_confirm_password = confirm_password.value;
  //alert("confirm password: " + u_confirm_password);
    //alert("user name: " + u_name + "\npassword : " + u_password +"\nConfirm password : " + u_confirm_password);
    document.getElementById("user_name_error").innerHTML="";
    document.getElementById("password_error").innerHTML="";
    document.getElementById("confirm_password_error").innerHTML="";
  if(u_name == "" || u_name.length == 0){
      document.getElementById("user_name_error").innerHTML="User name cannot be blank!";
      is_valid=false;
      //alert("testing for blank user name");
  }
  else if(u_name.length < 5 ){
       document.getElementById("user_name_error").innerHTML="User name must be at least 5 characters long.";
      is_valid=false;
      //alert("testing for minimum length");
      
  }
  else if(u_password === "" || u_password.length == 0){
      document.getElementById("password_error").innerHTML="Password cannot be empty!";
      is_valid  = false;
      //alert("testing for blank for password.");
  }
  else if(u_password.length < 5){
      document.getElementById("password_error").innerHTML="Password must be at least 5 characters long!";
      is_valid  = false;
      //alert("testing for minimum password length");
  }
  else if(u_password != u_confirm_password){
      document.getElementById("confirm_password_error").innerHTML="Confirm password does not matched!";
      //confirm_password_error.innerHTML = "Confirm password does not matched!";
      is_valid = false;
      //alert("testing for confirm password not matching");
  }
  //alert (is_valid);
  return is_valid;
};


