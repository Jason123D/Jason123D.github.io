function agregarFamiliar() {
    const nombre = document.getElementById('familiarNombre').value;
    const parentesco = document.getElementById('familiarParentesco').value;
    const edad = document.getElementById('familiarEdad').value;
  
    if (nombre && parentesco && edad) {
      datos.familiares.push({ nombre, parentesco, edad });
      document.getElementById('familiares').innerHTML += `<p>${nombre} / ${parentesco} / ${edad}</p>`;
      document.getElementById('familiarNombre').value = '';
      document.getElementById('familiarParentesco').value = '';
      document.getElementById('familiarEdad').value = '';
    }
  }
  
  function agregarCondicion() {
    const enfermedad = document.getElementById('condicion').value;
    const tiempo = document.getElementById('tiempoCondicion').value;
  
    if (enfermedad && tiempo) {
      datos.condiciones.push({ enfermedad, tiempo });
      document.getElementById('condiciones').innerHTML += `<p>${enfermedad} - ${tiempo}</p>`;
      document.getElementById('condicion').value = '';
      document.getElementById('tiempoCondicion').value = '';
    }
  }
  
  function agregarInternamiento() {
    const fecha = document.getElementById('fechaInternamiento').value;
    const centro = document.getElementById('centro').value;
    const diagnostico = document.getElementById('diagnostico').value;
  
    if (fecha && centro && diagnostico) {
      datos.internamientos.push({ fecha, centro, diagnostico });
      document.getElementById('internamientos').innerHTML += `<p>${fecha} - ${centro} - ${diagnostico}</p>`;
      document.getElementById('fechaInternamiento').value = '';
      document.getElementById('centro').value = '';
      document.getElementById('diagnostico').value = '';
    }
  }