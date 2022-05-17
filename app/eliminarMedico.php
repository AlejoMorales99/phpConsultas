<?php

require_once 'bd.php'; //incluyo la cadena de conexión PHP

//Recibimos la data del formulario

$id_medico = $_GET['id_medico'];


//var_dump($id,$nombre,$apellidos,$email,$telefono,$movil);

//Hacer el proceso de request - response

$sql = "DELETE FROM medico WHERE id_medico={$id_medico}";
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute();  //Ejecuta la sentencia SQL

header('Location:../medicos.php');