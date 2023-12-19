

<h1><?=$todos_los_usuarios?></h1>;

<h1>Listado de usuarios</h1>
<?php while ($usuario = $todos_los_usuarios->fetch_object()) : ?>
   <?=$usuario->email?> - <?=$todos_los_usuarios->fecha?> <br/>
<?php endwhile; ?>