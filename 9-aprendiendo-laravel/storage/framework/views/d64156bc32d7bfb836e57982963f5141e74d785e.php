<?php if(isset($fruta) && is_object($fruta)): ?>
    <h1>Editar una fruta</h1>
<?php else: ?>
    <h1>Crear una fruta</h1>
<?php endif; ?>

<form action="<?php echo e(isset($fruta) ? url('frutas/update') : url('frutas/save')); ?>" method="POST">
    <?php echo e(csrf_field()); ?>


    <?php if(isset($fruta) && is_object($fruta)): ?>
        <input type="hidden" name="id" value="<?php echo e($fruta->id); ?>"/><br/>
    <?php endif; ?>

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="<?php echo e($fruta->nombre ?? ''); ?>"/><br/>

    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="<?php echo e($fruta->descripcion ?? ''); ?>"/><br/>

    <label for="precio">Precio</label>
    <input type="number" name="precio" value="<?php echo e($fruta->precio ?? 0); ?>"/><br/>

    <input type="submit" value="Guardar" />
</form><?php /**PATH C:\wamp64\www\Curso-PHP\9-aprendiendo-laravel\resources\views/fruta/create.blade.php ENDPATH**/ ?>