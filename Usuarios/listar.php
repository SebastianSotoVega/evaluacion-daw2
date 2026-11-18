<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
</head>
<body>

    <table border="1">
        <thead>
            <tr>
                <th>N°</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $indice => $usuario){ ?>
                <tr>
                    <td><?php echo $indice + 1; ?></td>
                    <td><?php echo $usuario['usuario']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td>
                        <!-- uso las rutas de users que ya tienen editar y eliminar -->
                        <a href="<?php echo BASE_URL; ?>users/editar/<?php echo $usuario['id']; ?>">Editar</a>
                        <a href="<?php echo BASE_URL; ?>users/eliminar/<?php echo $usuario['id']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <br>
    <a href="<?php echo BASE_URL; ?>users/crear">Crear Usuario</a>

</body>
</html>
