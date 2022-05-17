<?php

require_once 'bd.php'; //incluyo la cadena de conexión PHP

//Recibimos la data del formulario

$id_medico = $_POST['id_medico'];
$nombre_medico = $_POST['nombre_medico'];
$apellidos_medico = $_POST['apellidos_medico'];
$email = $_POST['email'];
$especialidad = $_POST['especialidad'];

//var_dump($id,$nombre,$apellidos,$email,$telefono,$movil);

//Hacer el proceso de request - response

$sql = "UPDATE medico SET nombre_medico=?,apellidos_medico=?,email=?,especialidad=? WHERE id_medico={$id_medico}";
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute([$nombre_medico,$apellidos_medico,$email,$especialidad]);  //Ejecuta la sentencia SQL

header('Location:../medicos.php');