<?php
require_once 'plantilla/cabecera.php'
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<!-- INICIO DEL CONTENIDO -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <!-- <h1 class="h2">Crud de contactos</h1> -->
        
      </div>

      <div class="container fluid">
      <div class="row">
      <div class="col-md-6">
        <div class="card">
          
          <div class="card-body">
          <h3 class="card-title">Registro de Médicos</h3>
            <form action="app/insertarMedico.php" method="POST">

              <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
              </div>

              <div class="mb-3">
                <label for="Apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email">
              </div>

              <div class="mb-3">
                <label for="especialidad" class="form-label">Especialidad</label>
                <input type="text" class="form-control" name="especialidad" id="especialidad">
              </div>

              
              <button type="submit" class="btn btn-dark"><i class="bi bi-person-plus-fill"></i></button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Móvil</th>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once 'app/listarMedicos.php';
            foreach ($resultado as $datos) {
              ?>
          <tr>
            <td><?php echo $datos->id_medico  ?></td>
            <td><?php echo $datos->nombre_medico  ?></td>
            <td><?php echo $datos->apellidos_medico  ?></td>
            <td><?php echo $datos->email  ?></td>
            <td><?php echo $datos->especialidad  ?></td>
            <td><a href="frmEditar.php  ?id=<?php echo $datos->id_medico ?>" type="button" class="btn btn-dark"><i class="bi bi-pencil-square"></i></a></td>
            <td><a href="app/eliminarMedico.php?id_medico=<?php echo $datos->id_medico ?>" type="button" class="btn btn-dark"><i class="bi bi-trash2-fill"></i></a></td>
          </tr>
            
         <?php };?>
            
          </tbody>
        </table>
      </div>
    </div>
      </div>

<!-- FIN DEL CONTENIDO -->

      <?php
require_once 'plantilla/footer.php'
?>