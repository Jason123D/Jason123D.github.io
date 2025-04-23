document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    // Obtener valores del formulario
    const nombre = document.getElementById("nombre").value;
    const apellido = document.getElementById("apellido").value;
    const email = document.getElementById("email").value;
    const telefono = document.getElementById("telefono").value;

    // Formato vCard
    const vCard = `
BEGIN:VCARD
VERSION:3.0
N:${apellido};${nombre}
FN:${nombre} ${apellido}
TEL;TYPE=CELL:${telefono}
EMAIL:${email}
END:VCARD
    `.trim();

    // Eliminar QR anterior (si existe)
    document.getElementById("qrcode").innerHTML = "";

    // Generar nuevo QR
    new QRCode(document.getElementById("qrcode"), {
        text: vCard,
        width: 200,
        height: 200
    });
});
