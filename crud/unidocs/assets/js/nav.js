function expandirBarraLateral() {
    var barraLateral = document.getElementById("barra");
    var img = document.getElementById("icono");
    var nom = document.getElementById("icono_nom");
    var img2 = document.getElementById("icono2");
    var nom2 = document.getElementById("icono_nom2");
    var img3 = document.getElementById("icono3");
    var nom3 = document.getElementById("icono_nom3");
    var img4 = document.getElementById("icono4");
    var nom4 = document.getElementById("icono_nom4");
    var img5 = document.getElementById("icono5");
    var nom5 = document.getElementById("icono_nom5");
    var img6 = document.getElementById("icono6");
    var nom6 = document.getElementById("icono_nom6");
    barraLateral.style.width = "250px"; /* Ancho de la barra lateral expandida */
    img.style.width="30%";
    nom.style.display="block";
    img2.style.width="30%";
    nom2.style.display="block";
    img3.style.width="30%";
    nom3.style.display="block";
    img4.style.width="30%";
    nom4.style.display="block";
    img5.style.width="30%";
    nom5.style.display="block";
    img6.style.width="30%";
    nom6.style.display="block";
}
  
function contraerBarraLateral() {
    var barraLateral = document.getElementById("barra");
    var img = document.getElementById("icono");
    var nom = document.getElementById("icono_nom");
    var img2 = document.getElementById("icono2");
    var nom2 = document.getElementById("icono_nom2");
    var img3 = document.getElementById("icono3");
    var nom3 = document.getElementById("icono_nom3");
    var img4 = document.getElementById("icono4");
    var nom4 = document.getElementById("icono_nom4");
    var img5 = document.getElementById("icono5");
    var nom5 = document.getElementById("icono_nom5");
    var img6 = document.getElementById("icono6");
    var nom6 = document.getElementById("icono_nom6");
    barraLateral.style.width = "64px"; /* Ancho de la barra lateral contraída */
    img.style.width="100%";
    nom.style.display="none";
    img2.style.width="100%";
    nom2.style.display="none";
    img3.style.width="100%";
    nom3.style.display="none";
    img4.style.width="100%";
    nom4.style.display="none";
    img5.style.width="100%";
    nom5.style.display="none";
    img6.style.width="100%";
    nom6.style.display="none";
}
