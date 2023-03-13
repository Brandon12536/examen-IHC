<?php
// Obtener los datos de la solicitud
$requestData = file_get_contents('php://input');
$data = json_decode($requestData, true);

// Verificar si se recibieron todos los datos necesarios
if (!isset($data['id'], $data['nombre'], $data['apellido'], $data['genero'], $data['puesto'], $data['edad'])) {
    header('Content-Type: application/json', true, 400);
    echo json_encode(['msg' => 'Faltan datos']);
    exit;
}

// Obtener los datos del empleado a actualizar
$id = $data['id'];
$nombre = $data['nombre'];
$apellido = $data['apellido'];
$genero = $data['genero'];
$puesto = $data['puesto'];
$edad = $data['edad'];

// URL de la API
$url = 'https://631b6de31b470e0e12ee2de2.mockapi.io/empleados/' . $id;

// Inicializamos cURL
$ch = curl_init($url);

// Configuramos la solicitud PUT
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'nombre' => $nombre,
    'apellido' => $apellido,
    'genero' => $genero,
    'puesto' => $puesto,
    'edad' => $edad,
]));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'
));

// Enviamos la solicitud y cerramos la conexión
$response = curl_exec($ch);
curl_close($ch);

// Verificamos si hubo algún error en la solicitud
if ($response === false) {
    // Devolvemos un mensaje de error
    header('Content-Type: application/json', true, 400);
    echo json_encode(['msg' => 'Error al actualizar el registro']);
    exit;
}

// Devolvemos la respuesta de la API
header('Content-Type: application/json');
echo $response;
?>
