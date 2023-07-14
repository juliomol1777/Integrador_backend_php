<?php
    include("./include/templates/header.php");
?>
  <div class="tabla_oradores">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Tema</th>
    </tr>
  </thead>
  <tbody>
    
    <?php require("./acceso_a_datos/obtenerDatos.php");?>
    <?php while ($participantes = mysqli_fetch_array($consultas))  { ?>
      <tr>
        <th scope="row"><?php echo $participantes['id'] ?></th>
        <td><?php echo $participantes['nombre'] ?></td>
        <td><?php echo $participantes['apellido'] ?></td>
        <td><?php echo $participantes['email'] ?></td>
        <td><?php echo $participantes['tema'] ?></td>
        </tr>
    <?php }  ?>
      
  </tbody>
</table>
</div>
</body>
<?php
  include("./include/templates/footer.php");

?>