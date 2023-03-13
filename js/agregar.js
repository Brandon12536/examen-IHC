// Espera a que la página cargue completamente
window.addEventListener('DOMContentLoaded', function () {
    // Obtiene el formulario
    const form = document.getElementById("employee-form");

    // Maneja el evento submit del formulario
    form.addEventListener("submit", function (event) {
      // Previene que el formulario se envíe automáticamente
      event.preventDefault();

      // Obtiene los valores de los campos del formulario
      const id = document.getElementById("id").value;
      const nombre = document.getElementById("nombre").value;
      const apellido = document.getElementById("apellido").value;
      const genero = document.getElementById("genero").value;
      const puesto = document.getElementById("puesto").value;
      const edad = document.getElementById("edad").value;

      // Crea un objeto con los datos del nuevo empleado
      const data = {
        id: id,
        nombre: nombre,
        apellido: apellido,
        genero: genero,
        puesto: puesto,
        edad: edad
      };

      // Realiza la llamada a la API para agregar el nuevo empleado
      axios.post('https://631b6de31b470e0e12ee2de2.mockapi.io/empleados', data)
        .then(response => {
          console.log(response.data);
          alert("Registro agregado exitosamente")
        })
        .catch(error => {
          console.error(error);
          alert("Registro no agregado")
        });
    });
  });