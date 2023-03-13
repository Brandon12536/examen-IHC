<?php
// Obtiene los datos enviados por POST desde el formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$genero = $_POST['genero'];
$puesto = $_POST['puesto'];
$edad = $_POST['edad'];

// Crea un objeto con los datos del nuevo empleado
$data = array(
    'id' => $id,
    'nombre' => $nombre,
    'apellido' => $apellido,
    'genero' => $genero,
    'puesto' => $puesto,
    'edad' => $edad
);

// Codifica los datos como JSON
$json = json_encode($data);

// URL de la API a
$url = 'https://631b6de31b470e0e12ee2de2.mockapi.io/empleados';

// Configura la petición HTTP
$options = array(
'http' => array(
'header' => "Content-type: application/json\r\n",
'method' => 'POST',
'content' => $json
)
);

// Crea el contexto de la petición HTTP
$context = stream_context_create($options);

// Envía la petición HTTP al servidor de la API
$result = file_get_contents($url, false, $context);

// Devuelve la respuesta de la API al cliente
echo $result;