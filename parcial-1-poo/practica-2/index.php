<?php

include "Admin.php";

$admin = new Admin("Alexa", "alexa@email.com");

echo "Nombre: " . $admin->getNombre();
echo "<br>";
echo "Correo: " . $admin->getCorreo();
echo "<br>";
echo "Rol: " . $admin->getRol();

?>