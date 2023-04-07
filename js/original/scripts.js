// BOTÓN IR ARRIBA

window.onscroll = function() {btnVisible()};


// Cuando el usuario hace scroll más de 100px del inicio de la página, se muestra el botón

function btnVisible() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("btnIrArriba").style.display = "block";
  } else {
    document.getElementById("btnIrArriba").style.display = "none";
  }
}

// Cuando el usuario hace clic en el botón, va hasta arriba de la página

function irArriba() {
  window.scrollTo({ top: 0, behavior: 'smooth' })
}

//MENU RESPONSIVO

function menuR() {
  var x = document.getElementById("menuResponsivo");
  if (x.className === "menuSecundario menuResp") {
    x.className += "responsivo";
  } else {
    x.className = "menuSecundario menuResp";
  }
} 

// POPUP

var contenedorPopup = document.getElementById('contenedorPopup'),
  popup = document.getElementById('popup');
  
  
  function abrirPopup(){
      contenedorPopup.classList.add('active');
      popup.classList.add('active');
    }  

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	contenedorPopup.classList.remove('active');
	popup.classList.remove('active');
});

// SOLAPAS

function solapas(evt, solapasNombre) {
  // Declaración de variables
  var i, solapasContenido, solapasLinks;

  // Obtiene todos los elementos con la clase solapasContenido y las oculta
  solapasContenido = document.getElementsByClassName("solapasContenido");
  for (i = 0; i < solapasContenido.length; i++) {
    solapasContenido[i].style.display = "none";
  }

  // Obtiene todos los elementos con la clase solapasLinks y les remueve la clase activo
  solapasLinks = document.getElementsByClassName("solapasLinks");
  for (i = 0; i < solapasLinks.length; i++) {
    solapasLinks[i].className = solapasLinks[i].className.replace(" activo", "");
  }

  // Muestra la solapa actual y le agrega la clase activo al botón que abrió la solapa
  document.getElementById(solapasNombre).style.display = "block";
  evt.currentTarget.className += " activo";
}

// Obtiene el elemento con el id abiertoPorDefecto y le hace clic
var abiertoDefecto = document.getElementById("abiertoPorDefecto");
if (abiertoDefecto !=null){
  document.getElementById("abiertoPorDefecto").click();
}