<?php
header("Content-Type: application/json");
$db = 'database.json';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo file_exists($db) ? file_get_contents($db) : json_encode([]);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    file_put_contents($db, file_get_contents('php://input'));
    echo json_encode(["status" => "ok"]);
}
?>
