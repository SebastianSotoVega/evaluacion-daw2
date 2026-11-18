<h2>Lista de usuarios</h2>
<a href="<?= BASE_URL ?>users/crear">Nuevo</a>
<br><br>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Email</th>
        <th>Estado</th>
        <th></th>
    </tr>
    <?php foreach ($data["users"] as $user): ?>
        <tr>
            <td><?= $user["id"] ?></td>
            <td><?= $user["usuario"] ?></td>
            <td><?= $user["email"] ?></td>
            <td><?= $user["estado"] ?></td>
            <td>
                <a href="<?= BASE_URL ?>users/ver/<?= $user["id"] ?>">Ver</a>
                <a href="<?= BASE_URL ?>users/editar/<?= $user["id"] ?>">Editar</a>
                <a href="<?= BASE_URL ?>users/eliminar/<?= $user["id"] ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
