<?php
session_start();
error_reporting();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/nurse.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>C.M. Lepras</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <img src="./images/LOGO.png" class="img-fluid" alt="...">
            </div>
            <div class="col-md-2">
                Cra 100 con 98 <br>
                Edificio la ceiba<br>
                Cali - Valle
            </div>
            <div class="col-md-2">
                Email: ClinicaBarata@gmail.com <br>
                Citas médicas : 555-666
            </div>
        </div>
        <!-- NAVBAR**************************************************** -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">:::</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-heart-fill"> Inicio</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-info-square-fill"></i> Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-journal-plus"></i> Citas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-people-fill"></i> Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#frmLogin"><i class="bi bi-key-fill"></i> Login</a>
                            <!--                             <a class="nav-link" href="panel.php"><i class="bi bi-key-fill"></i> Login</a> -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-5 mx-3">

                <div class="alert alert-<?php echo $_SESSION['tipo']; ?> alert-dismissible fade show" role="alert">
                    <?php
                    echo $_SESSION['mensaje'];
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="card-body mt-3">
                    <h3 class="card-title">Registro de Pacientes</h3>

                    <form action="app/insertarPaciente.php" method="POST">


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
                </div>
            </div>



            <div class="col-md-5">
                <div class="card-body mt-3">

                    <div class="mb-3">
                        <label for="fecha_nace" class="form-label">fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fechaNace" id="fecha_nace">
                    </div>

                    <div class="mb-3">
                        <label for="E.P.S." class="form-label">E.P.S.</label>
                        <input type="text" class="form-control" name="eps" id="E.P.S.">
                    </div>

                    <div class="mb-3">
                        <label for="usuarioPaciente" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="usuarioPaciente" id="usuarioPaciente">
                    </div>

                    <div class="mb-3">
                        <label for="passwordUsuario" class="form-label">Password</label>
                        <input type="password" class="form-control" name="passwordUsuario" id="passwordUsuario">
                    </div>


                    <button type="submit" class="btn btn-dark"><i class="bi bi-person-plus-fill"></i> Guardar</button>
                    <button type="cancel" class="btn btn-dark"><i class="bi bi-x-square-fill"></i> Cancelar</button>
                    </form>
                </div>
            </div>


        </div>
        <div class="col-md-2"></div>



        <div class="row mt-5 p-5 bg-dark">
            <div class="col-md-6 text-light">
                <i class="bi bi-hospital-fill"></i>
                Cra 100 con 98 <br>
                Edificio la ceiba<br>
                Cali - Valle
            </div>
            <div class="col-md-6 text-light">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>





    <!-- Fin contenedor principal -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>