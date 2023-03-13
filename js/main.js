let titulo = document.getElementById("titulo");
let registros = document.getElementById("registros");
let cargar = document.getElementById("cargar");

titulo.innerHTML = "Aplicación utilizando JS y AXIOS";


cargar.onclick=()=>{
    //alert("Hola mundo");
    registros.innerHTML = "";
    cargar.innerHTML="Cargando datos...";

    axios
  .get("https://631b6de31b470e0e12ee2de2.mockapi.io/empleados")
  .then((response) => {
    // manejar respuesta exitosa
    //console.log(response.data);
    let arrayDB = response.data;
    //const arrayDB  = new Array (response.data);
  
    console.log(arrayDB);

    arrayDB.forEach((registro, index) => {
      //console.log("Registro " + (index + 1) + ": " + registro.nombre);
      registros.innerHTML =
        registros.innerHTML +
        "<tr>"+
            "<th scope='row'>" +(index + 1) +"</th>"+
            "<td>"+registro.nombre+"</td>"+
            "<td>"+registro.apellido+"</td>"+
            "<td>"+registro.genero+"</td>"+
            "<td>"+registro.puesto+"</td>"+
            "<td>"+registro.edad+"</td>"+
        "</tr>";
    });

    cargar.innerHTML="Cargar";
  })
  .catch(function (e) {
    // manejar error
    console.log(e);
  })
  .finally(function () {
    // siempre sera executado
  });
};

