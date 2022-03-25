
let form = document.getElementById("form");
let username = document.getElementById("username");
let email = document.getElementById("email");
let pass1 = document.getElementById("pass1");
let pass2 = document.getElementById("pass2");

let error = document.querySelectorAll(".error_message");
let submit = document.getElementById("submit_btn");

const uesrnameRegex =  /^[a-zA-Z]/;
const emailRegex = /^[a-zA-Z][A-Za-z0-9-_.]+@(gmail|outlook|yahoo).(com|fr|net)/;
const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])/;

form.addEventListener('submit', function(){


if(username.value == "")
{
    error.innerText = "Please fill all inputs";
    e.preventDefault();
}

if(email.value == ""){
    error.innerText = "Please fill all inputs";
    e.preventDefault();

}
if(pass1.value == ""){
    error.innerText = "Please fill all inputs";
    e.preventDefault();

}
if(pass2.value == ""){
    error.innerText = "Please fill all inputs";
    e.preventDefault();

}

    const isValidEmail = email => {
        return emailRegex.test(email);
    }
    const isValiduser = username => {
        return uesrnameRegex.test(username);
    }
    const isValidpass1 = pass1 => {
        return passwordRegex.test(pass1);
    }
    const isValidpass2 = pass2 => {
        return passwordRegex.test(pass2);
    }
})


