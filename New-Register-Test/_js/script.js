/* 
 * Shankar Ghimire
 * StudentId:991585190
 * Course: ...............
 */

/* 
 * Shankar Ghimire
 * StudentId:991585190
 * Course: Web Programming
 */
var user_register = document.getElementById("user_register");
var user_name = document.getElementById("user_name");
var user_password = document.getElementById("user_password");
var user_confirm_password = document.getElementById("user_confirm_password");

user_register.onsubmit=function(){
    //alert("testing");
    return validate_register_data();
};
var validate_register_data = function(){
    //alert("testing");
    var is_valid = true;
    var val1 = user_name.value;
    if(val1===""){
        //alert("Testing blank value");
       document.getElementById("user_name_error").innerHTML = "Missing user name!";
        //user_name_error.innerHTML ="Missing field.";
        is_valid=false;
    }else if(val1.length < 5){
        user_name_error.innerHTML = "User Name must be at least 5 characters long";
        is_valid = false;
    }
//    else if(isNaN(val1) ){
//        numberOfCoffeeError.innerHTML ="Non-numeric value not allowed.";
//        isValid=false;
//    }
//    else if(val1 ==0 ){
//        numberOfCoffeeError.innerHTML ="Zero not allowed for Order qty.";
//        isValid=false;
//    }
//    else if(val1 < 0 ){
//        numberOfCoffeeError.innerHTML ="Negaive value not allowed.";
//        isValid=false;
//    }
    return is_valid;
};






