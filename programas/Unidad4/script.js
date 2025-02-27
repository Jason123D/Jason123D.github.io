document.getElementById('cedulaForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const cedula = document.getElementById('cedula').value;
    const resultado = validarCedulaDominicana(cedula);
    document.getElementById('resultado').textContent = resultado;
});

function validarCedulaDominicana(cedula) {

    if (cedula.length !== 11 || isNaN(cedula)) {
        return 'CÉDULA INCORRECTA';
    }

    const pesos = [1, 2, 1, 2, 1, 2, 1, 2, 1, 2];
    const digitoVerificador = parseInt(cedula[10], 10); 
    let suma = 0;

    for (let i = 0; i < 10; i++) {
        let digito = parseInt(cedula[i], 10);
        let resultado = digito * pesos[i];
        if (resultado > 9) {
            resultado = resultado.toString().split('').reduce((acc, curr) => acc + parseInt(curr, 10), 0);
        }

        suma += resultado;
    }

    const calculado = (10 - (suma % 10)) % 10;

    if (calculado === digitoVerificador) {
        return 'CÉDULA CORRECTA';
    } else {
        return 'CÉDULA INCORRECTA';
    }
}