<h1><?php echo e($titulo); ?></h1>
<p>(accion index del controlador PeliculaController)</p>

<?php if(isset($pagina)): ?>
    <h3>La pagina es <?php echo e($pagina); ?></h3>
<?php endif; ?>

<a href="<?php echo e(url('/detalle')); ?>">Ir al detalle</a>
<br>
<a href="<?php echo e(route('detalle.pelicula')); ?>">Ir al detalle</a>
<br>
<a href="<?php echo e(route('detalle.pelicula', ['id' => 12])); ?>">Ir al detalle</a>
<?php /**PATH C:\wamp64\www\Curso-PHP\9-aprendiendo-laravel\resources\views/pelicula/index.blade.php ENDPATH**/ ?>