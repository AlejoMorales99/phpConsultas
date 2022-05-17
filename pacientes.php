<?php
require_once 'plantilla/cabecera.php'
?>
<!-- INICIO DEL CONTENIDO -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Crud de contactos</h1>
        
      </div>

      <div class="container fluid">
      <div class="row">
      <div class="col-md-6">
        <div class="card">
          
          <div class="card-body">
          <h3 class="card-title">Registro de contacto</h3>
            <form action="crud/insertarContactos.php" method="POST">

            <div class="mb-3">
                <label for="ID" class="form-label">ID</label>
                <input type="text" class="form-control" name="id" id="id">
              </div>

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
                <label for="Telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefono" id="telefono">
              </div>

              <div class="mb-3">
                <label for="Movil" class="form-label">Móvil</label>
                <input type="text" class="form-control" name="movil" id="movil">
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="activo" name="activo">
                <label class="form-check-label" for="exampleCheck1">Activo</label>
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
              <th scope="col">email</th>
              <th scope="col">telefono</th>
              <th scope="col">password</th>
              <th scope="col">movil</th>
              <th scope="col">eps</th>
              <th scope="col">usuario</th>
              <th scope="col">fecha</th>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once 'app/listar_pacientes.php';
            foreach ($resultado as $datos) {
              ?>
          <tr>
            <td><?php echo $datos->id_paciente  ?></td>
            <td><?php echo $datos->nombre_paciente  ?></td>
            <td><?php echo $datos->apellido_paciente  ?></td>
            <td><?php echo $datos->emailPaciente  ?></td>
            <td><?php echo $datos->telefono_paciente  ?></td>
            <td><?php echo $datos->passwordPaciente ?></td>
            <td><?php echo $datos->movilPaciente  ?></td>
            <td><?php echo $datos->epsPaciente  ?></td>
            <td><?php echo $datos->usuarioPaciente  ?></td>
            <td><?php echo $datos->fechaNacePaciente  ?></td>
            <td><a href="frmEditar.php?id=<?php echo $datos->id ?>" type="button" class="btn btn-dark"><i class="bi bi-pencil-square"></i></a></td>
            <td><a href="crud/eliminarContacto.php?id=<?php echo $datos->id ?>" type="button" class="btn btn-dark"><i class="bi bi-trash2-fill"></i></a></td>
          </tr>
            
         <?php };?>
            
          </tbody>
        </table>
      </div>
    </div>
      </div>
ejemplos
<!-- FIN DEL CONTENIDO -->

      <?php
require_once 'plantilla/footer.php'
?>