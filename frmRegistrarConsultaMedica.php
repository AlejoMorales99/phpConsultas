<?php
session_start();

require_once 'plantilla/cabezeraC.php';
require_once 'app/traerDatosPacienteConsulta.php';

//var_dump($medicos);

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5 class="h2">Consulta Medica</h5>
    </div>
    <!--INICIO DEL CONTENIDO-->
    <div class="container-fluid">
        <div class="row">


            <form id="enviar" action="" method="post" >

                <div class="card ">

                    <h5 class="card-header">Datos Personales</h5>

                    <div class="row p-3 ">
                        <div class="col-md-4">
                            <label for="">Fecha</label>
                            <input name = "FechaConsulta" class="form-control" type="date">
                        </div>

                        <div class="col-md-4">
                            <label for="">medico</label>
                            <input name="idMedico" class="form-control" value="<?php echo $_SESSION["idUsuario"]?>" readonly  type="text">
                        </div>

                        <div class="col-md-4">
                            <label for="">Elige el paciente</label>
                            
                            

                            <select class="form-control" name="idCliente" id="btn1">
                                
                                <?php foreach ($resultado as $result) { ?>

                                    <option   value="<?php echo  $result->id_paciente ?>"><?php echo  $result->nombre_paciente ?></option>
                                <?php }  ?>

                            </select>

                        </div>



                        

                        <div class="col-md-4">
                            <br><label for="">fecha nacimiento del paciente</label>
                            <input id="fecha" disabled class="form-control" type="text">
                        </div>

                        <div class="col-md-4">
                            <br><label for="">edad del cliente</label>
                            <input id="edad" disabled  class="form-control" type="text">
                        </div>

                        

                    </div>
                    <br>



                </div><br>

                <div class="card ">

                    <h5 class="card-header">Precondiciones</h5>

                    <div class="row p-3 ">
                        <div class="col-md-3">
                            <label for="">Diabetes</label>
                            

                            <select class="form-control" name="diabetes" id="">
                                <option value=""></option>
                                <option value="1">si</option>
                                <option value="0">no</option>
                            </select>

                        </div>

                        <div class="col-md-3">
                            <label for="">Colesterol</label>
                            

                            <select class="form-control" name="colesterol" id="">
                            <option value=""></option>
                                <option value="1">si</option>
                                <option value="0">no</option>
                            </select>

                        </div>

                        <div class="col-md-3">
                            <label for="">Hipertencion</label>
                            

                            <select class="form-control" name="hipertencion" id="">
                                <option value=""></option>
                                <option value="1">si</option>
                                <option value="0">no</option>
                            </select>

                        </div>

                        <div class="col-md-3">
                            <label for="">otra Condicion</label>
                            <textarea name="otraCondicion"  class="form-control" aria-label="With textarea"></textarea>
                        </div>

                    </div>




                </div><br>

                <div class="card ">

                    <h5 class="card-header">Chequeo basico</h5>

                    <div class="row p-3 ">
                        <div class="col-md-4">
                            <label for="">presion alta </label>
                            <input class="form-control" name="presionAlta" id="presionAlta"  type="text">
                        </div>

                        <div class="col-md-4">
                            <label for="">presion baja</label>
                            <input class="form-control" name="presionBaja" id="presionBaja"  type="text">
                        </div>

                        <div class="col-md-4">
                            <label for="">saturacion</label>
                            <input class="form-control"  name="saturacion"   type="text">
                        </div>


                    </div>




                </div><br>

                <div class="card ">

                    <h5 class="card-header">Informe</h5>

                    <div class="row p-3 ">
                        <div class="col-md-6">
                            <label for="">Reporte del paciente </label>
                            <textarea name="reportePaciente"  class="form-control" aria-label="With textarea"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="">Diagnostico Medico</label>
                            <textarea name="reporteMedico" class="form-control" aria-label="With textarea"></textarea>
                        </div>

                    </div>

                    <div class="row p-3 ">
                        <div class="col-md-2">
                            <input class="btn btn-primary " value="Formula medica" type="button">
                        </div>

                        <div class="col-md-2">
                            <input class="btn btn-secondary " value="Cancelar" type="button">
                        </div>

                        <div class="col-md-2">
                            <input id ="guardar" class="btn btn-success " value="Guardar" type="submit">
                        </div>

                    </div>

                    <div id="mensaje" class="" role="alert">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    

                </div>


            </form>




        </div>
    </div>


    <!-- FIN DEL CONTENIDO -->

    <?php
    require_once 'plantilla/footer.php';
    ?>