<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";

echo "<h2>Prueba de usuarios</h2>";

try {
    $admin = new Admin("Alexa", "alexa@email.com");
    echo "Nombre: " . $admin->getNombre() . "<br>";
    echo "Correo: " . $admin->getCorreo() . "<br>";
    echo "Rol: " . $admin->getRol() . "<br><br>";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

try {
    $alumno = new Alumno("Juan", "correo_mal", "A123");
    echo "Nombre: " . $alumno->getNombre() . "<br>";
    echo "Correo: " . $alumno->getCorreo() . "<br>";
    echo "Rol: " . $alumno->getRol() . "<br>";
    echo "Matrícula: " . $alumno->getMatricula() . "<br>";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

?>