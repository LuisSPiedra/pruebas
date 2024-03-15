function expandirBarraLateral() {
    var barraLateral = document.getElementById("barraLateral");
    var txt = document.getElementById("text");
    var txt2 = document.getElementById("text2");
    txt2.style.display="block";
    txt.style.display="block";
    barraLateral.style.width = "200px"; /* Ancho de la barra lateral expandida */
}
  
function contraerBarraLateral() {
    var barraLateral = document.getElementById("barraLateral");
    var txt = document.getElementById("text");
    var txt2 = document.getElementById("text2");
    txt2.style.display="none";
    txt.style.display="none";
    barraLateral.style.width = "80px"; /* Ancho de la barra lateral contraída */
}