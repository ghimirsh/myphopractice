/* 
 * Shankar Ghimire
 * StudentId:991585190
 * Course: ...............
 */

var userregisterform = document.getElementById("userregisterfrom");
var username = document.getElementById("username");
var password = document.getElementById("password");
var testform= document.getElementById("testform");
userregisterform.onsubmit = function(){
    return validateData();
};
var validateData = function(){
    testform.innerHTML = username.value;
};


