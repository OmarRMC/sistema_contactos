<?php

$listaUsuarios = Persona::listarUsuarios();

?>
<h4 style="text-align: center;">Lista de usuarios</h4>
<div class="container_table">
  <table class="table">
    <thead>
      <tr class="table-active">
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">paterno</th>
        <th scope="col">materno</th>
        <th scope="col">correo</th>
        <th scope="col">fecha Creacion</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($listaUsuarios as $key =>  $usuario) : ?>
        <tr>
          <th scope="row"><?= ($key+1) ?></th>
          <td><?= $usuario['nombre'] ?></td>
          <td><?= $usuario['paterno'] ?></td>
          <td><?= $usuario['materno'] ?></td>
          <td><?= $usuario['usuario'] ?></td>
          <td><?= $usuario['creado_el'] ?></td>
        </tr>
      <?php endforeach;  ?>

    </tbody>
  </table>
  <div class="accion">
  <form action="<?= BASE_URL ?>controladores/reportes/excel.php" target="_blank" method="post">
    <button type="submit" class="btn btn-success">Excel</button>
  </form>
    <form action="<?= BASE_URL ?>controladores/reportes/pdf.php" target="_blank" method="post">
      <button type="submit" class="btn btn-danger">Pdf</button>
    </form>
  </div>
</div>