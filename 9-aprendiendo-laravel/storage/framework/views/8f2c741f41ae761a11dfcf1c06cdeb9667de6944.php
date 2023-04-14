<h1><?php echo e($fruta->nombre); ?></h1>
<p>
    <?php echo e($fruta->descripcion); ?>

</p>

<a href="/frutas/delete/<?=$fruta->id?>">Eliminar</a>
<a href="/frutas/edit/<?=$fruta->id?>">Actualizar</a><?php /**PATH C:\wamp64\www\Curso-PHP\9-aprendiendo-laravel\resources\views/fruta/detalle.blade.php ENDPATH**/ ?>