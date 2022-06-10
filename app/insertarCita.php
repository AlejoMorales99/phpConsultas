<?php
session_start();
require_once 'bd.php'; //incluyo la cadena de conexión PHP
 // activa el despliegue de errores para programador

//Recibimos la data del formulario

$fecha = filter_var($_POST['fecha'], FILTER_DEFAULT);
$hora = filter_var($_POST['hora'], FILTER_DEFAULT);
$idMedico =  filter_var($_POST['medico'], FILTER_DEFAULT);
$motivo = filter_var(trim($_POST['motivo']), FILTER_DEFAULT);
$idPaciente =  filter_var($_POST['paciente'], FILTER_DEFAULT);


//escriptando la password

$sql = 'INSERT INTO agenda
(fecha,hora,idMedico,motivo,idPaciente) VALUES (?,?,?,?,?)';
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute([$fecha, $hora, $idMedico, $motivo, $idPaciente]);

var_dump($sentencia->rowCount());

if ($sentencia->rowCount() > 0) {

    $_SESSION['tipo'] = "success";
    $_SESSION['mensaje'] = "Operacion exitosa";
} else {
    $_SESSION['tipo'] = "danger";
    $_SESSION['mensaje'] = "ha ocurrido un error en la insercion";
}

header('Location:../frmAgendarCita.php');
