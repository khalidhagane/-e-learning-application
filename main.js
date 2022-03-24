
function verifier(e){
    let elts = document.querySelectorAll("input");
    
    if(elts[0].value == "")
    {
        
        
        e.preventDefault();
        
        
    }
    if(elts[1].value == ""){
        e.preventDefault();

    }
    if(elts[2].value == ""){
        e.preventDefault();

    }

}
// let password = document.getElementById("rejix")
// password.onsubmit = function(){
//     let pass1 = document.getElementsByName("password").value;
//     let pass2 = /\d{3}/;
//     let pass_valide = pass2.test(pass1);
// if(pass_valide == false){
//     "password no valide";
//     return false;
// }
// return true;

// }

