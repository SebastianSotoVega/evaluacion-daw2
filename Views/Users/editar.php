<form
    action="<?= BASE_URL ?>users/actualizar/<?= $data["user"]["id"] ?>"
    method="POST"
>

    <input
        type="text"
        name="usuario"
        value="<?= $data["user"]["usuario"] ?>"
    >

    <input
        type="email"
        name="email"
        value="<?= $data["user"]["email"] ?>"
    >

    <select name="estado">
        <!-- marco el estado que ya tiene el usuario -->
        <option value="1" <?= $data["user"]["estado"] == 1 ? "selected" : "" ?>>Activo</option>
        <option value="0" <?= $data["user"]["estado"] == 0 ? "selected" : "" ?>>Inactivo</option>
    </select>

    <button type="submit">Actualizar</button>

</form>
