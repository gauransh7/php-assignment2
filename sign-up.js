function validation(){
    var count = 0;
var name = document.getElementById("name").value;
var mobile = document.getElementById("mobile").value;
var age = document.getElementById("age").value;
//var city = document.getElementById("city").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var cpassword = document.getElementById("cpassword").value;
var gender = document.getElementById("gender").value;


var namecheck = /^[a-zA-Z | \s]+$/;
var mobilecheck = /^[0][1-9]\d{9}$|^[1-9]\d{9}|^(\+91\s?)[1-9]\d{9}$/;
var agecheck = /^[0,1]?[0-9]?[0-9]$| ^0?|^(100)$|^(200)$/;
//var citycheck = /^[a-zA-Z | \s | -]+$/;
var emailcheck = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
var passwordcheck = /^.{6,9}$/;
var cpasswordcheck = passwordcheck;
var gendercheck = /^(male|female|others)$/;
// var check = /^[a-zA-Z | \s]+$/;



if(namecheck.test(name)){
    var el = document.getElementById("nameerror");
    if(el.className=="errorshow"){
        el.className="error";
    }
    else{
        
    }
}
else{
    var el = document.getElementById("nameerror");
    el.className = "errorshow";
    count++;
}
if(mobilecheck.test(mobile)){
    var el = document.getElementById("mobileerror");
    console.log('2432423')
    if(el.className=="errorshow"){
        el.className="error";
    }
    else{
    }
}
else{
    var el = document.getElementById("mobileerror");
    el.className = "errorshow";
    count++;
}
if(agecheck.test(age)){
    var el = document.getElementById("ageerror");
    if(el.className=="errorshow"){
        el.className="error";
    }
    else{
        
    }
}
else{
    var el = document.getElementById("ageerror");
    el.className = "errorshow";
    count++;
}
// if(citycheck.test(city)){
//     var el = document.getElementById("cityerror");
//     if(el.className=="errorshow"){
//         el.className="error";
//     }
//     else{
        
//     }
// }
// else{
//     var el = document.getElementById("cityerror");
//     el.className = "errorshow";
//     count++;
// }
if(emailcheck.test(email)){
    var el = document.getElementById("emailerror");
    if(el.className=="errorshow"){
        el.className="error";
    }
    else{
        
    }
}
else{
    var el = document.getElementById("emailerror");
    el.className = "errorshow";
    count++;
}
if(gendercheck.test(gender)){
    var el = document.getElementById("gendererror");
    if(el.className=="errorshow"){
        el.className="error";
    }
    else{
        
    }
}
else{
    var el = document.getElementById("gendererror");
    el.className = "errorshow";
    count++;
}
if(passwordcheck.test(password)){
    var el = document.getElementById("passworderror");
    if(el.className=="errorshow"){
        el.className="error";
    }
    else{
        
    }
}
else{
    var el = document.getElementById("passworderror");
    el.className = "errorshow";
    count++;
}
if(cpassword==password){
    var el = document.getElementById("cpassworderror");
    if(el.className=="errorshow"){
        el.className="error";
    }
    else{
        
    }
}
else{
    var el = document.getElementById("cpassworderror");
    el.className = "errorshow";
    count++;
}
// if(namecheck.test(name)){
    
// }
// else{
//     var el = document.getElementById("nameerror");
//     el.className = el.className.replace("nameerror", "");
//     el.className += "show";
//     return false;
// }
if(count>0){
    alert("1");
    return false;
}
}