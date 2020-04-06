/* 
 * Shankar Ghimire
 * StudentId:991585190
 * Course: ...............
 */
var registerform= document.getElementById("userregistration");
var username=document.getElementById("username");
var password= document.getElementById("password");
var confirmpassword= document.getElementById("confirmpassword");
registerform.onsubmit = function(){
    return validateRegister();
};

var validateRegister = function(){
  var isValid = true;
  var u_name = username.value;
  var u_password = password.value;
  var u_confirmpasspassword = confirmpassword.value;
  
  if(u_name ===""){
      username_error.innerHTML="User name cannot be blank!";
      isValid=false;
      
  }
  else if(u_name.length < 5 ){
      username_error.innerHTML ="User name must be at least 5 characters long.";
      isValid=false;
  }
  else if(u_password===""){
      password_error.innerHTML = "Password cannot be empty!";
      isValid  = false;
  }
  else if(u_password.length < 5){
      password_error.innerHTML = "Password must be at least 5 characters long!";
      isValid  = false;
  }
  else if(u_password !== u_confirmpassword){
      confirmpassword_error = "Confirm password does not matched!";
      isValid = false;
  }
  return isValid;
};


