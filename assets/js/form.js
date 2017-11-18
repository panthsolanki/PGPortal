function Show_Amo(){
    document.getElementById("AmoAdd").style.display = "inherit";
}
function Hide_Amo(){
    document.getElementById("AmoAdd").style.display = "none";
}
// Sign up form
function Show_occu(){
    document.getElementById("Occuption").style.display = "inherit";
    document.getElementById("Address").style.display = "none";
}
function Hide_occu(){
    document.getElementById("Occuption").style.display = "none";
    document.getElementById("Address").style.display = "inherit";
}

// Old function
function Show_Re(){
    document.getElementById("CurrRe").style.display = "inherit";
}
function Hide_Re(){
    document.getElementById("CurrRe").style.display = "none";

}
function Show_Cur(){
    document.getElementById("CurrAdd").style.display = "inherit";
}
function Hide_Cur(){
    document.getElementById("CurrAdd").style.display = "none";
}

function Show_W(){
    document.getElementById("H").style.display = "none";
    document.getElementById("W").style.display = "inherit";
    document.getElementById("PLName").placeholder="H Name"
}
function Show_H(){
    document.getElementById("W").style.display = "none";
    document.getElementById("H").style.display = "inherit";
    document.getElementById("PLName").placeholder="F Name"
}
function show(aval){
    if (aval == "Married"){
        m.style.display='inherit';
    }else{
        m.style.display='none';
    }
}