
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