
function validate_register(){
    var uname =document.getElementById("name").value;
    var email =document.getElementById("email").value;
    var phone =document.getElementById("phone_num").value;
    var pass =document.getElementById("pass").value;
    var conpass =document.getElementById("con_pass").value;
    
    var atindex = email.indexOf('@');
    var atdot = email.indexOf('.');

   if(uname.trim() =="" || uname.length < 3)
    {
        alert("Name cannot be blank and  it should contain minimum 3 words");
        return false;
    }
    
   else if(email.indexOf("@") == -1 || email.indexOf(".") <= 0 ||email.length < 6) {
        alert("Enter correct email");
        return false;
    }
   
    else if(phone.trim() == "" || isNaN(phone) || phone.length != 10){
        alert("Enter correct phone number");
        return false;
    }
    
    else if(pass.trim() =="" )
    {
        alert("password cannot be blank");
        return false;
    }
    else if(pass.trim().length<6)
    {
        alert("Password should contain minimum 6 characters");
        return false;
    }
    else if(pass.trim()!=conpass.trim()){
        alert("Password mismatch");
        return false;
    }
    else
    {
        alert("Succesfully registered")
        return true;
    }

}

// login function

function validate_login(){

    var username = document.getElementById("uname");
    var password = document.getElementById("pass");

    if(username.value.trim() =="")
    {
        alert("Username cannot be blank");
        username.focus();
        return false;
    }
    else if(password.value.trim() =="")
    {
        alert("Password cannot be blank");
        password.focus();
        return false;
    }
    else if(password.value.trim().length<6)
    {
        alert("Password should contain minimum 6 characters");
        password.focus();
        return false;
    }
    else
    {
        alert("Logged in successfully")
        return true;
    }
}
