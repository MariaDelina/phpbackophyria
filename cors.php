<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

// Verificar el método de la solicitud
$method = $_SERVER['REQUEST_METHOD'];

// Manejar las solicitudes OPTIONS
if ($method == "OPTIONS") {
    // Configurar las cabeceras CORS para la solicitud OPTIONS
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

    // Finalizar la ejecución del script
    die();
}

// Resto del código para manejar las solicitudes reales (GET, POST, etc.)
// ...

// Ejemplo adicional: Manejar una solicitud GET
if ($method == "GET") {
    // Código para manejar la solicitud GET
    // ...
    // Puedes agregar más lógica aquí según tus necesidades
    // ...
    // Ejemplo de respuesta JSON
    $response = array('status' => 'success', 'message' => 'Solicitud GET recibida correctamente');
    echo json_encode($response);
}
?>
