<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php';  ?>


<div id="principal">
    <h1>Crear Entradas</h1>
    <p>
        Añade nuevas Entradas al blog para los usuarios pedan
        leerlas y disfrutar  de nuestro contenido.
    </p>
    <br>
    <form action="guardar-entrada.php" method="POST">

        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo">

        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion">

        <label for="categoria">Categoria:</label>
        <select name="categoria">
            <?php 
                $categorias = conseguirCategorias($db); 
                if(!empty($categorias)):
                while($categoria =  mysqli_fetch_assoc($categorias)):    
            ?>
                <option value="<?=$categoria['id']?>">
                               <?= $categoria['nombre']; ?>
                </option>
            <?php
            endwhile;
            endif;
            ?>
        </select>

        
        <input type="submit" value="Guardar">
    </form>
</div><!---fin principal--->
<?php require_once 'includes/pie.php'; ?>