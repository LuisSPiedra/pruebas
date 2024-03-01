const datos=document.getElementById('datos');
const boton =document.getElementById('botonM');
const botonF =document.getElementById('botonMF');
const formu= document.getElementById('formulario');

function mostrar(){
    datos.style.display = 'block';
    boton.style.display = 'none';
    botonF.style.display = 'none';

}
function ocultar(){
    datos.style.display = 'none';
    boton.style.display = 'block';
    botonF.style.display = 'block';
}
function mostrarF(){
    botonF.style.display = 'none';
    formu.style.display = 'block';
    boton.style.display = 'none';
}
function ocultarF(){
    formu.style.display = 'none';
    boton.style.display = 'block';
    botonF.style.display = 'block';
}