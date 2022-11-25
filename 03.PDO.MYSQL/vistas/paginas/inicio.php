<?php
if (!isset($_SESSION["validaringreso"])){
  echo '<script> window,location = "index.php?ruta=ingreso" </script>';
  return;

} else {
  
  if($_SESSION["validaringreso"] != "ok") {

    echo '<script> window,location = "index.php?ruta=ingreso" </script>';
    return;
  }   
}
$usurios = ControladorFormularios::ctrSleccionarRegistros(null, null);



?>

<table class="table">
    <thead>
      <tr>
        <th><i class="fa-brands fa-slack"></i></th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Fecha</th>
        <th>Acciones</th>
      </tr>
    </thead>

      <tbody>
      <?php foreach ($usurios as $key => $value): ?>
        <tr>
          <td><?php echo ($key + 1); ?></td>
          <td><?php echo $value ["nombre"] ?></td>
          <td><?php echo $value ["email"] ?></td>
          <td><?php echo $value ["fecha"] ?></td>
          <td>
            <div class="btn-group">
              <div class= "px-1">
              <a href = "index.php?ruta=editar&id=<?php echo $value["id"];?>" class= " btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
              </div>
              <form method="post">
              <input type="hidden" value= "<?php echo $value["id"];?>" name = "eliminarRegistro">
              <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
              <?php 
              $eliminar = new ControladorFormularios();
              $eliminar -> ctrEliminarRegistro();
              ?>

              </form>
            </div>
          </td>
        </tr>
      <?php endforeach ?>
      </tbody>
</table>