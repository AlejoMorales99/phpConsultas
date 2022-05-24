<?php
require_once 'bd.php';

$usuario = filter_var(trim($_POST['usuario'], FILTER_DEFAULT));
$password = filter_var(trim($_POST['password'], FILTER_DEFAULT));

$sql = "SELECT * FROM paciente where usuarioPaciente = ?";
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute([$usuario]);  //Ejecuta la sentencia SQL
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);
//var_dump($resultado);
//echo $resultado['passwordPaciente'];


//validamos usuario y clave 
if (!password_verify($password, $resultado->passwordPaciente)) {
    header("location:../index.php");
} else {
    session_start();
    $_SESSION['usuarioActivo'] = $resultado->usuarioPaciente;
    header("location:../panelPaciente.php");
}

/*echo "<pre>";
var_dump($resultado);
echo "</pre>";*/
