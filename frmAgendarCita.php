<?php
error_reporting(0);
session_reset();
session_start();


require_once 'plantilla/cabeceraP.php';
require_once 'app/listarMedicos.php';
//var_dump($medicos);

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5 class="h2">Agendar Citas</h5>
    </div>
    <!--INICIO DEL CONTENIDO-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-8">

                <div class="alert alert-<?php echo $_SESSION['tipo']; ?> alert-dismissible fade show" role="alert">
                    <?php
                    echo $_SESSION['mensaje'];
                    ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Agendar Cita</h5>
                        <form action="app/insertarCita.php" method="POST">
                            <div class="mb-3">
                                <label for="FechaCita" class="form-label">fecha de la cita</label>
                                <input type="date" class="form-control" name="fecha" id="fecha">
                            </div>

                            <!--<div class="mb-3">
                                <label for="horaCita" class="form-label">Hora</label>
                                <input type="time" class="form-control" id="exampleInputEmail1">

                            </div>-->

                            <label for="horaCita">Hora cita</label>
                            <select name="hora" class="hora" id="hora">

                                <option value="0800">8:00</option>
                                <option value="0900">9:00</option>
                                <option value="1000">10:00</option>
                                <option value="1100">11:00</option>
                                <option value="1300">1:00</option>
                                <option value="1400">2:00</option>
                                <option value="1500">3:00</option>
                                <option value="1600">4:00</option>
                                <option value="1700">5:00</option>

                            </select>
                            <br>
                            <label for="">Medico</label>
                            <select name="medico" id="medico">
                                <!-- plantillas php para html con php puro-->
                                <?php foreach ($medicos as $medico) : ?>

                                    <option value="<?php echo $medico->id_medico;  ?>"><?php echo $medico->nombre_medico . ' ' . $medico->apellido_medico . '  ' . $medico->especialidad   ?></option>

                                <?php endforeach; ?>


                            </select> <br>

                            <label for="motivoCita">Motivo de la consulta</label><br>
                            <textarea name="motivo" id="motivo" cols="60" rows="10"></textarea>
                            <br>

                            <input readonly type="text" name="paciente" id="" value="<?php echo $_SESSION['idUsuario']; ?>">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <img src="./images/médicos-influencers-en-Instagram.jpg" class="img-fluid" alt="...">
            </div>
        </div>
    </div>


    <!-- FIN DEL CONTENIDO -->

    <?php
    require_once 'plantilla/footer.php';
    ?>