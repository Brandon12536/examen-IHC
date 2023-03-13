<?php
// Obtenemos el ID del empleado a eliminar
$nombre = $_GET['nombre'];

// URL de la API
$url = 'https://631b6de31b470e0e12ee2de2.mockapi.io/empleados/' . $nombre;

// Inicializamos cURL
$ch = curl_init($url);

// Configuramos la solicitud DELETE
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Enviamos la solicitud y cerramos la conexión
$response = curl_exec($ch);
curl_close($ch);

// Verificamos si hubo algún error en la solicitud
if ($response === false) {
    // Devolvemos un mensaje de error
    header('Content-Type: application/json', true, 400);
    echo json_encode(['msg' => 'Error al eliminar el registro']);
    exit;
}

// Devolvemos la respuesta de la API
header('Content-Type: application/json');
echo $response;
?>
