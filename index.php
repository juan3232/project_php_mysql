<!----
git add * -> agrega los cambios al stash
git commit -m "descripcion del cambio" -> acomete los cambios
git push  -> sube los cambios al remoto
git fetch -> actualiza el remoto para saber si hubo cambios comparado a tu local
git pull -> descarga los cambios del remoto
---->
<?php require_once 'includes/cabecera.php'; ?>

<?php require_once 'includes/lateral.php';  ?>
<!---caja principal-->
<div id="principal">
    <h1>Ultimas entradas</h1>

    <?php
    $entradas = conseguirEntradas($db, true);
    if (!empty($entradas)) :
        while ($entrada = mysqli_fetch_assoc($entradas)) :
    ?>
            <article class="entrada">
                <a href="entrada.php?id=<?= $entrada['id'] ?>">
                    <h2><?= $entrada['titulo'] ?></h2>
                    <span class="fecha"><?= $entrada['categoria'] . ' | ' . $entrada['fecha'] ?></span>
                    <p>
                        <?= substr($entrada['descripcion'], 0, 20000) . "..." ?>
                    </p>
                </a>
            </article>
    <?php
        endwhile;
    endif;
    ?>
    
    <div id="ver-todas">
        <a href="">ver todas las entradas</a>
    </div>
</div><!---fin principal--->

<?php require_once 'includes/pie.php'; ?>