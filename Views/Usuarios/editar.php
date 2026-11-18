<h3>Editar usuario</h3>

<form
    action="<?= BASE_URL ?>usuarios/actualizar/<?= $data["usuario"]["id"] ?>"
    method="POST"
>

    <input
        type="text"
        name="usuario"
        value="<?= $data["usuario"]["usuario"] ?>"
    >

    <input
        type="email"
        name="email"
        value="<?= $data["usuario"]["email"] ?>"
    >

    <select name="estado">
        <!-- marco el estado que ya tiene el usuario -->
        <option value="1" <?= $data["usuario"]["estado"] == 1 ? "selected" : "" ?>>Activo</option>
        <option value="0" <?= $data["usuario"]["estado"] == 0 ? "selected" : "" ?>>Inactivo</option>
    </select>

    <button type="submit">Actualizar</button>

</form>

<a href="<?= BASE_URL ?>usuarios">Volver</a>
