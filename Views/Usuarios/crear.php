<h3>Nuevo usuario</h3>

<form action="<?= BASE_URL ?>usuarios/guardar" method="POST">

    <label>Usuario:</label>
    <input type="text" name="usuario" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Clave:</label>
    <input type="password" name="clave" required>

    <button type="submit">Guardar</button>

</form>

<a href="<?= BASE_URL ?>usuarios">Volver</a>
