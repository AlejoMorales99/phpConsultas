<?php

require_once 'bd.php'; //incluyo la cadena de conexión PHP

//Recibimos la data del formulario

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$especialidad = $_POST['especialidad'];
$contrasena = $_POST['contraseña'];

var_dump($contrasena);
//Hacer el proceso de request - response

$sql = 'INSERT INTO medico (nombre_medico,apellido_medico,email,especialidad,contraseña) VALUES (?,?,?,?,?)';
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute([$nombre,$apellidos,$email,$especialidad,$contrasena]);  //Ejecuta la sentencia SQL

header('Location:../medicos.php');