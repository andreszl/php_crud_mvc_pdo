<h2>Crear Usuario</h2>

<form action="create" method="post">
    <input type="text" name="data[]" required placeholder="Nombre">
    <input type="email" name="data[]" required placeholder="Correo Electronico">
    <button >Guardar</button>
</form>

  <table>
    <thead>
      <tr>
        <th>Codigo Usuario</th>
        <th >Nombre</th>
        <th >Email</th>
        <th >Eliminar</th>
        <th>Actualizar</th>
      </tr>
    </thead>
    <tbody>
  <?php foreach ($users as $user) { ?>
    <tr>
      <form class="" action="update" method="post">
      <td><input type="text" name="data[]" value='<?php echo $user['user_id']; ?>'/></td>
      <td><input type="text" name="data[]" value='<?php echo $user['user_name']; ?>'/></td>
      <td><input type="text" name="data[]" value='<?php echo $user['user_email']; ?>'/></td>
      <td><a href="?c=user&a=delete&data=<?php echo $user['user_id']; ?>">Eliminar</a></td>
      <td><button>Actualizar</button></td>
    </tr>
    </form>
    <?php  }?>
    </tbody>
  </table>
