<?php
require_once 'plantilla/cabeceraP.php'
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5 class="h2">Agendar Citas</h5>
    </div>
    <!--INICIO DEL CONTENIDO-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-8">

                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Agendar Cita suculenta</h5>
                        <form>
                            <div class="mb-3">
                                <label for="FechaCita" class="form-label">fecha de la cita</label>
                                <input type="date" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="mb-3">
                                <label for="horaCita" class="form-label">Hora</label>
                                <input type="time" class="form-control" id="exampleInputEmail1">

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

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