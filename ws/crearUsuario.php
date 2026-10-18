<?php

require_once __DIR__ . '/interfaces/IToJson.php';
require_once __DIR__ . '/models/User.php';

use models\User;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "Método no permitido se deben enviar los datos mediante POST.";
    exit;
}

$name = $_POST['name'] ?? '';
$surname = $_POST['surname'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';
$phone = $_POST['phone'] ?? '';
$mail = $_POST['mail'] ?? '';
$sex = $_POST['sex'] ?? '';

$user = new User($name, $surname, $contrasena, $phone, $mail, $sex);

$filePath = dirname(__DIR__) . '/usuarios.txt';
$dataToSave = $user->toJson() . PHP_EOL;
file_put_contents($filePath, $dataToSave, FILE_APPEND | LOCK_EX);

header('Content-Type: application/json; charset=utf-8');
echo $user->toJson();