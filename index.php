<!----
git add * -> agrega los cambios al stash
git commit -m "descripcion del cambio" -> acomete los cambios
git push  -> sube los cambios al remoto
git fetch -> actualiza el remoto para saber si hubo cambios comparado a tu local
git pull -> descarga los cambios del remoto
---->
<?php require_once 'includes/cabecera.php'; ?>
<div id="contenedor">
    <?php require_once 'includes/lateral.php';  ?>
    <!---caja principal-->
    <div id="principal">
        <h1>Ultimas entradas</h1>
        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio,
                inventore maiores hic minima nostrum explicabo quia. Expedita distinctio fugit
                numquam impedit sapiente
                cumque harum tempora similique corporis. Impedit, nihil saepe.
            </p>
        </article>

        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio,
                inventore maiores hic minima nostrum explicabo quia. Expedita distinctio fugit
                numquam impedit sapiente
                cumque harum tempora similique corporis. Impedit, nihil saepe.
            </p>
        </article>

        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio,
                inventore maiores hic minima nostrum explicabo quia. Expedita distinctio fugit
                numquam impedit sapiente
                cumque harum tempora similique corporis. Impedit, nihil saepe.
            </p>
        </article>

    </div>
</div><!----fin del contenedor --->


<?php require_once 'includes/pie.php'; ?>