<?php

require_once 'bd.php'; //incluyo la cadena de conexión PHP

//Recibimos la data del formulario

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$especialidad = $_POST['especialidad'];


//Hacer el proceso de request - response

$sql = 'INSERT INTO medico (nombre_medico,apellidos_medico,email,especialidad) VALUES (?,?,?,?)';
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute([$nombre,$apellidos,$email,$especialidad]);  //Ejecuta la sentencia SQL

header('Location:../medicos.php');