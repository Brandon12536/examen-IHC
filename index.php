<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="shortcut icon" href="img/js.png" type="image/x-icon">
  <link rel="stylesheet" href="css/styles.css">
  <title>Aplicación Web con AXIOS</title>
</head>

<body>


  <!---------------------------------------Barra de navegación--------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img class="Examen" src="img/lista-de-verificacion.png">Examen unidad 1
      IHC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="agregar.php">Agregar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Leer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update.php">Modificar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="delete.php">Eliminar</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <h1 id="titulo" class="text-center"></h1>
  <div class="d-flex justify-content-center">
    <button type="button" id="cargar" class="btn btn-primary w-25">Cargar datos</button>
  </div>
  <div class="container mt-5">
    <table class="table table-striped table-dark">
      <thead>
        <tr class="text-center">
          <th class="col-1">No</th>
          <th class="col-2">Nombre</th>
          <th class="col-2">Apellido</th>
          <th class="col-2">Género</th>
          <th class="col-4">Puesto</th>
          <th class="col-1">Edad</th>
        </tr>
      </thead>
      <tbody id="registros"></tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>