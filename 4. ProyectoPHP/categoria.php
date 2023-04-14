<?php require_once 'includes/cabecera.php'; ?>
<?php 
    $categoria = conseguirCategoria($db, $_GET['id']);
    if(!isset($categoria['id'])){
        header("Location: index.php");
    }
?>
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">    
    <h1>Entradas de <?=$categoria['nombre']?></h1>
    
    <?php 
        $entradas = conseguirEntradas($db, null, $_GET['id']);
        
        if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
            while($entrada = mysqli_fetch_assoc($entradas)):            
    ?>
                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                        <p>
                            <?=substr($entrada['descripcion'],0, 180)."..."?>
                        </p>
                    </a>
                </article>
    <?php
            endwhile;
        else:
    ?>
    <div class='alerta'>No hay entradas en esta categoría</div>
    <?php 
        endif; 
    ?>
      
    <div id="ver-todas">
        <a href="index.php">Ver ultimas entradas</a>
    </div>
</div> <!-- fin principal -->

<?php include_once 'includes/pie.php'; ?>
