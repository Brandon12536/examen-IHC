// Agregamos un event listener al formulario para enviar la solicitud DELETE
document.querySelector('form').addEventListener('submit', (event) => {
    event.preventDefault(); // Evitamos que el formulario se envíe automáticamente
  
    // Obtenemos el nombre del empleado a eliminar
    let nombre = document.getElementById('nombre').value;
  
    // Realizamos la solicitud DELETE usando Axios
    axios({
      method: 'DELETE',
      url: `borrar.php?nombre=${nombre}`
    })
    .then(response => {
      // Mostramos un mensaje de éxito en la consola
      console.log('Registro eliminado con éxito:', response.data);
      document.getElementById('result').innerHTML = 'Registro eliminado con éxito';
    })
    .catch(error => {
      // Mostramos un mensaje de error en la consola
      console.error('Error al eliminar el registro:', error.response.data);
      document.getElementById('result').innerHTML = 'Error al eliminar el registro';
    });
  });
  