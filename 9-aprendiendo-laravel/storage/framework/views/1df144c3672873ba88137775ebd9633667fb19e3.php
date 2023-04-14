<h1>Listado de frutas</h1>

<?php if(session('status')): ?>
    <p style="background: green; color:white;">
        <?php echo e(session('status')); ?>

    </p>
<?php endif; ?>

<ul>
    <?php $__currentLoopData = $frutas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <a href="/frutas/detalle/<?=$fruta->id?>">
            <?php echo e($fruta->nombre); ?>

        </a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\wamp64\www\Curso-PHP\9-aprendiendo-laravel\resources\views/fruta/index.blade.php ENDPATH**/ ?>