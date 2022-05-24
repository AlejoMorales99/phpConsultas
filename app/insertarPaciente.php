<?php
session_start();
require_once 'bd.php'; //incluyo la cadena de conexión PHP

//Recibimos la data del formulario

$nombre = filter_var(trim($_POST['nombre'],FILTER_DEFAULT));
$apellidos = filter_var(trim( $_POST['apellidos']),FILTER_DEFAULT);
$email =  filter_var(trim( $_POST['email']),FILTER_DEFAULT);
$telefono = filter_var(trim( $_POST['telefono']),FILTER_DEFAULT);
$movil = filter_var(trim( $_POST['movil']),FILTER_DEFAULT);
$pass= filter_var(trim( $_POST['passwordUsuario']),FILTER_DEFAULT);

$eps = filter_var(trim( $_POST['eps']),FILTER_DEFAULT);
$usuario = filter_var(trim( $_POST['usuarioPaciente']),FILTER_DEFAULT);
$fecha = filter_var(trim( $_POST['fechaNace']),FILTER_DEFAULT);


//escriptando la password
$password = password_hash($pass,PASSWORD_DEFAULT);

$sql = 'INSERT INTO paciente
(nombre_paciente,apellido_paciente,emailPaciente,telefono_paciente,passwordPaciente,movilPaciente,epsPaciente,usuarioPaciente,fechaNacePaciente)
  VALUES (?,?,?,?,?,?,?,?,?)';
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute([$nombre,$apellidos,$email,$telefono,$password,$movil,$eps,$usuario,$fecha]);

if($sentencia->rowCount()>0){
  
  $_SESSION['tipo'] = "success";
  $_SESSION['mensaje'] = "Operacion exitosa";

}else{
  $_SESSION['tipo'] = "danger";
  $_SESSION['mensaje'] = "ha ocurrido un error en la insercion";
}



header('Location:../frmRegistroPaciente.php');