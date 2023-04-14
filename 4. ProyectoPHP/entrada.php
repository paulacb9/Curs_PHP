<?php require_once 'includes/cabecera.php'; ?>
<?php 
    $entrada = conseguirEntrada($db, $_GET['id']);
    if(!isset($entrada['id'])){
        header("Location: index.php");
    }
?>
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">       
    <h1>Entradas de <?=$entrada['titulo']?></h1>
    <a href='categoria.php?id=<?=$entrada['categoria_id']?>'>
        <h2><?=$entrada['categoria']?></h2>
    </a>
    <h4><?=$entrada['fecha']?> | <?=$entrada['usuario']?></h4>
    <p>
        <?=$entrada['descripcion']?>
    </p>
          
    <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada['usuario_id']):?>
        <br>    
        <a href="editar-entrada.php?id=<?=$entrada['id']?>" class="boton">Editar entrada</a>
        <a href="borrar-entradas.php?id=<?=$entrada['id']?>" class="boton">Eliminar entrada</a>        
    <?php endif; ?>
    
</div> <!-- fin principal -->

<?php include_once 'includes/pie.php'; ?>
