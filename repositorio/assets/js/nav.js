function expandirBarraLateral() {
    var barraLateral = document.getElementById("navab");
    /*
    var txt = document.getElementById("text");
    var txt2 = document.getElementById("text2");
    txt2.style.display="block";
    txt.style.display="block";*/
    barraLateral.style.display = "none"; /* Ancho de la barra lateral expandida */
}
  
function contraerBarraLateral() {
    var barraLateral = document.getElementById("navab");
    /*c_izq
    var txt = document.getElementById("text");
    var txt2 = document.getElementById("text2");
    txt2.style.display="none";
    txt.style.display="none";*/
    barraLateral.style.display = "block"; /* Ancho de la barra lateral contraída */
}