function materia() {
    // Cambiar la URL a la que deseas redireccionar
    window.location.href = 'Materias.php';
}
function lic() {
    // Cambiar la URL a la que deseas redireccionar
    window.location.href = 'Licenciaturas.php';
}
function arch() {
    // Cambiar la URL a la que deseas redireccionar
    window.location.href = 'Myfiles.php';
}
function inicio() {
    // Cambiar la URL a la que deseas redireccionar
    window.location.href = 'inicio.php';
}
function mostrar(){
    const seleccion = document.getElementById("opciones");
    const opcionSeleccionada = seleccion.options[seleccion.selectedIndex].value;
    
    // Oculta todos los contenidos
    var todosLosContenidos = document.querySelectorAll(".contenido");
    var noselect = document.querySelectorAll(".noselect");
    todosLosContenidos.forEach(function (contenido) {
        contenido.style.display = "none";
    });
    noselect.forEach(function (contenido) {
        contenido.style.display = "none";
        
    });


    // Muestra el contenido correspondiente a la opción seleccionada
    var contenidoMostrar = document.getElementById("contenido"+opcionSeleccionada);
    contenidoMostrar.style.display = "block";
}