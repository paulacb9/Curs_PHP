<h1>Listado de usuarios</h1>
<?php while($usuario = $todos_los_usuarios->fetch_object()): ?>
    <?=$usuario->nombre?> <?=$usuario->apellido?> - <?=$usuario->fecha?><br>
<?php endwhile; ?>