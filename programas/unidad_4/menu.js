
let menu = [];

function cargarMenu() {
  fetch('menu.json')
    .then(response => response.json())
    .then(data => {
      menu = data.menu;
      renderizarMenu();
    })
    .catch(error => console.error('Error al cargar el menú:', error));
}

// Función pa renderiza
function renderizarMenu() {
  const menuContainer = document.getElementById('menu');
  menuContainer.innerHTML = ''; 

  menu.forEach(opcion => {
    const li = document.createElement('li');
    const a = document.createElement('a');
    a.href = opcion.enlace;
    a.textContent = opcion.nombre;
    li.appendChild(a);

    if (opcion.submenu) {
      const ul = document.createElement('ul');
      opcion.submenu.forEach(subopcion => {
        const subli = document.createElement('li');
        const suba = document.createElement('a');
        suba.href = subopcion.enlace;
        suba.textContent = subopcion.nombre;
        subli.appendChild(suba);
        ul.appendChild(subli);
      });
      li.appendChild(ul);
    }

    menuContainer.appendChild(li);
  });
}

function agregarOpcion(nombre, enlace) {
  const nuevaOpcion = {
    id: menu.length + 1, 
    nombre,
    enlace
  };
  menu.push(nuevaOpcion);
  renderizarMenu();
}


document.getElementById('formularioMenu').addEventListener('submit', (e) => {
  e.preventDefault();
  const nombre = document.getElementById('nombre').value;
  const enlace = document.getElementById('enlace').value;
  agregarOpcion(nombre, enlace);


  document.getElementById('nombre').value = '';
  document.getElementById('enlace').value = '';
});


cargarMenu();