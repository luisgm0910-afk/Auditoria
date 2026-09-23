<?php
// Recibir los datos JSON desde el JavaScript
$jsonDatos = file_get_contents('php://input');

if (!empty($jsonDatos)) {
    // Guardar o sobrescribir el archivo backup_auto.json en la misma carpeta
    file_put_contents('backup_auto.json', $jsonDatos);
    echo json_encode(["status" => "ok", "mensaje" => "Respaldo guardado en el servidor"]);
} else {
    echo json_encode(["status" => "error", "mensaje" => "Sin datos"]);
}
?>