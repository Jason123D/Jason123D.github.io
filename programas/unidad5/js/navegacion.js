let paginaActual = 0;
const paginas = document.querySelectorAll('.page');

function cambiarPagina(direccion) {
  paginas[paginaActual].classList.remove('active');
  paginaActual += direccion;

  if (paginaActual < 0) paginaActual = 0;
  if (paginaActual >= paginas.length) paginaActual = paginas.length - 1;

  if (paginaActual >= paginas.length - 1) {
    document.getElementById('btnGrabar').style.display = 'inline';
    mostrarResumen();
  } else {
    document.getElementById('btnGrabar').style.display = 'none';
  }

  paginas[paginaActual].classList.add('active');
}

function mostrarResumen() {
  
  datos.persona = {
    nombre: document.getElementById('nombre').value,
    edad: document.getElementById('edad').value,
    genero: document.getElementById('genero').value
  };
  
  document.getElementById('resultado').textContent = JSON.stringify(datos, null, 2);
}

function grabar() {
  mostrarResumen(); 
  alert("✅ Datos grabados correctamente.");
  console.log(datos);
}