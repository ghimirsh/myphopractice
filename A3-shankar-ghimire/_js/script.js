/* 
 * Shankar Ghimire
 * StudentId:991585190
 * Course: Web Programming
 */
var formData = document.getElementById("coffee-order-form");
var numberOfCoffe = document.getElementById("number-of-coffee");
var numberOfCoffeeError = document.getElementById("number-of-coffee-error");
formData.onsubmit=function(){
    return validateData();
};
var validateData = function(){
    var isValid = true;
    var val1 = numberOfCoffe.value;
    if(val1===""){
//        alert("Testing blank value");
        numberOfCoffeeError.innerHTML ="Missing field.";
        isValid=false;
    }
    else if(isNaN(val1) ){
        numberOfCoffeeError.innerHTML ="Non-numeric value not allowed.";
        isValid=false;
    }
    else if(val1 ==0 ){
        numberOfCoffeeError.innerHTML ="Zero not allowed for Order qty.";
        isValid=false;
    }
    else if(val1 < 0 ){
        numberOfCoffeeError.innerHTML ="Negaive value not allowed.";
        isValid=false;
    }
    return isValid;
};


