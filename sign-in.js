function validation(){
    var count = 0;
var name = document.getElementById("name").value;
var password = document.getElementById("password").value;



var namecheck = /^[a-zA-Z | \s]+$/;
var passwordcheck = /^.{6,9}$/;




if(namecheck.test(name)){
    var el = document.getElementById("nameerror");
    if(el.className=="errorshow"){
        el.className="error";
    }
    else{
        
    }
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

if(count>0){
    alert("1");
    return false;
}
}