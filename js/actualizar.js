const formulario = document.getElementById('formulario');

formulario.addEventListener('submit', function(evento) {
	evento.preventDefault();

	const id = document.getElementById('id').value;
	const nombre = document.getElementById('nombre').value;
	const apellido = document.getElementById('apellido').value;
	const genero = document.getElementById('genero').value;
	const puesto = document.getElementById('puesto').value;
	const edad = document.getElementById('edad').value;

	axios.post(`actualizar.php`, {
        id: id,
        nombre: nombre,
        apellido: apellido,
        genero: genero,
        puesto: puesto,
        edad: edad
    })
    
	.then(response => {
		document.getElementById('result').innerHTML = '<div class="alert alert-success">Registro actualizado correctamente.</div>';
	})
	.catch(error => {
		document.getElementById('result').innerHTML = '<div class="alert alert-danger">Registro no actualizado.</div>';
	});
});
