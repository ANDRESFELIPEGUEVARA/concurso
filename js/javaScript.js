function cambiar(){
    if (document.getElementById('Tipo_persona').value==='conductor'){
        document.getElementById('mostrar').style.display='block'
    }else {
        document.getElementById('mostrar').style.display='none'
    }
}

function iniciarSesion(event) {
    event.preventDefault();
    if(document.getElementById('email').value==='1234@gmail.com'  &&  document.getElementById('contraseña').value==='12345'){
        window.location.href = 'cliente.html';    
    }else if(document.getElementById('email').value==='123@gmail.com' && document.getElementById('contraseña').value==='123456'){
        window.location.href='conductor.html'
    }else{
        alert("Contraseña o Usuario incorrecto")

    }   
}

function exportarAExcel() {
    if (typeof XLSX === 'undefined') {
        alert("La biblioteca SheetJS no está incluida. Asegúrate de agregarla en tu archivo HTML.");
        return;
    }

    const datos = [
        ["Nombre", "Correo", "Contraseña"],
        [
            document.getElementById('nombre').value,
            document.getElementById('email').value,
            document.getElementById('contraseña').value
        ]
    ];

    const hoja = XLSX.utils.aoa_to_sheet(datos);
    const libro = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(libro, hoja, "Registro");

    XLSX.writeFile(libro, "Libro.xlsx");
}
