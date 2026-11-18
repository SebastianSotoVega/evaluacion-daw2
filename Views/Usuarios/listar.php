<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
</head>
<body>

    <h2>Lista de usuarios</h2>
    <a href="<?= BASE_URL ?>usuarios/crear">Nuevo usuario</a>
    <br><br>

    <table border="1">
        <thead>
            <tr>
                <th>N°</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Estado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data["usuarios"] as $indice => $usuario) { ?>
                <tr>
                    <td><?= $indice + 1 ?></td>
                    <td><?= $usuario["usuario"] ?></td>
                    <td><?= $usuario["email"] ?></td>
                    <td><?= $usuario["estado"] == 1 ? "Activo" : "Inactivo" ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>usuarios/ver/<?= $usuario["id"] ?>">Ver</a>
                        <a href="<?= BASE_URL ?>usuarios/editar/<?= $usuario["id"] ?>">Editar</a>
                        <a href="<?= BASE_URL ?>usuarios/eliminar/<?= $usuario["id"] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
