<!---Barra lateral-->
<aside id="sidebar">
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <form action="login.php" method="POST">

            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="pass">Contraseña</label>
            <input type="password" name="pass">

            <input type="submit" value="Ingresar">

        </form>

    </div>

    <div id="register" class="bloque">
        <h3>Registrate</h3>
        <form action="registro.php" method="POST">

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">

            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña">

            <input type="submit" name="submit" value="Registrar">

        </form>

    </div>
</aside>