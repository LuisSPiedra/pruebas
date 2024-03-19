function expandirBarraLateral() {
    var barraLateral = document.getElementById("navab");
    var der= document.getElementById("c_der");
    var izq = document.getElementById("c_izq");
    var txt1 = document.getElementById("txt1");
    var txt2 = document.getElementById("txt2");
    
    txt2.style.display="block";
    txt1.style.display="block";
    der.style.width="90%";
    izq.style.width="10%";
}
  
function contraerBarraLateral() {
    var barraLateral = document.getElementById("navab");
    var der= document.getElementById("c_der");
    var izq = document.getElementById("c_izq");
    var txt1 = document.getElementById("txt1");
    var txt2 = document.getElementById("txt2");
    
    der.style.width="95%";
    txt1.style.display="none";
    txt2.style.display="none";
    izq.style.width="5%";
}
