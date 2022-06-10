<?php

require_once 'bd.php';

$fechaHoy = new DateTime();


$idPaciente = $_POST["idCliente"];

$sql = "SELECT * FROM paciente where id_paciente = ? ";
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute([$idPaciente]);  //Ejecuta la sentencia SQL
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$fecha = $resultado->fechaNacePaciente;

$nacimiento = new DateTime($resultado->fechaNacePaciente);

$calcularEdad = $fechaHoy->diff($nacimiento);

$arrayName = array('fecha' => $fecha, "edad" => $calcularEdad->y);

echo json_encode($arrayName);









?>