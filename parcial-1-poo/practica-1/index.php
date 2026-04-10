<?php

require_once "Usuario.php";

$usuario = new Usuario("Alexa Karyme Yuriar Saraaco", "alexa.yuriar15@gmail.com");

echo "Nombre: " . $usuario->getNombre();
echo "<br>"; 
echo "Correo: " . $usuario->getCorreo();
?>