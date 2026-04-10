<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";
require_once "clases/Invitado.php";

$usuarios = [];

try {

    // ✔ Usuarios válidos
    $admin = new Admin("Alexa", "admin@gmail.com");
    $alumno = new Alumno("Juan", "juan@gmail.com", "12345");
    $invitado = new Invitado("Maria", "maria@gmail.com", "Google");

    $usuarios[] = $admin;
    $usuarios[] = $alumno;
    $usuarios[] = $invitado;

    // ❌ Usuario inválido (esto activa la excepción)
    $error = new Alumno("Pedro", "correo-mal", "999");

} catch (Exception $e) {

    echo "<p style='color:red;'>Error controlado: " . $e->getMessage() . "</p>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
</head>
<body>

<h2>Lista de Usuarios</h2>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Rol</th>
        <th>Matrícula</th>
        <th>Empresa</th>
    </tr>

    <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?= $u->getNombre(); ?></td>
            <td><?= $u->getCorreo(); ?></td>
            <td><?= $u->getRol(); ?></td>

            <td>
                <?= method_exists($u, 'getMatricula') ? $u->getMatricula() : "—"; ?>
            </td>

            <td>
                <?= method_exists($u, 'getEmpresa') ? $u->getEmpresa() : "—"; ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>