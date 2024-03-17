function expandirBarraLateral() {
    var barraLateral = document.getElementById("barraLateral");
    var txt1= document.getElementById("txt1");
    var txt2= document.getElementById("txt2");

    txt2.style.display="block";
    txt1.style.display="block";
    barraLateral.style.width = "200px"; /* Ancho de la barra lateral expandida */
}
  
function contraerBarraLateral() {
    var barraLateral = document.getElementById("barraLateral");
    var txt1= document.getElementById("txt1");
    var txt2= document.getElementById("txt2");

    txt2.style.display="none";
    txt1.style.display="none";
    barraLateral.style.width = "80px"; /* Ancho de la barra lateral contraída */
}
function lic() {
    // Cambiar la URL a la que deseas redireccionar
    window.location.href = 'locacion.html';
}