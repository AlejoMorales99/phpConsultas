<?php

$id_medico =$_GET['id_medico'];
//echo $id;

require_once 'app/actualizarMedico.php';

$sql = 'SELECT * from medico where id_medico = ?';
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute([$id_medico]);  //Ejecuta la sentencia SQL
$contacto = $sentencia->fetch(PDO::FETCH_OBJ);//Devuelve una fila con el resultado de la consulta
/* echo'<pre>';
var_dump($resultado);
echo'</pre>'; */

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>editar contactos</title>
  </head>
  <body>
    <div class="col-md-6">
        <div class="row">
        <div class="card">
          
          <div class="card-body">
          <h3 class="card-title">Registro de Médicos</h3>
            <form action="crud/actualizarContacto.php" method="POST">

            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" name="id" id="id" value="<?php echo $contacto->id_medico ;?>">
              </div>

              <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $contacto->nombre_medico ;?>">
              </div>

              <div class="mb-3">
                <label for="Apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $contacto->apellidos_medico ;?>">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="<?php echo $contacto->email ;?>">
              </div>

              <div class="mb-3">
                <label for="Especialidad" class="form-label">Especialidad</label>
                <input type="text" class="form-control" name="especialidad" id="especialidad" value="<?php echo $contacto->especialidad ;?>">
              </div>

              
              <button type="submit" class="btn btn-secondary">Actualizar</button>
            </form>
          </div>
        </div>
        </div>
    </div>
    <div class="col-mmd-6"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>