<?php
require_once 'bd.php';

$usuario = filter_var(trim($_POST['usuario'], FILTER_DEFAULT));
$password = filter_var(trim($_POST['password'], FILTER_DEFAULT));

$sql = "SELECT * FROM medico where contraseña  = ? ";
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute([$password]);  //Ejecuta la sentencia SQL
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);
//var_dump($resultado);
//echo $resultado['passwordPaciente'];


//validamos usuario y clave 
 
    session_start();
    $_SESSION["idUsuario"] = $resultado->id_medico;
    $_SESSION['usuarioActivo'] = $resultado->nombre_medico;
    header("location:../panelMedicos.php");


/*echo "<pre>";
var_dump($resultado);
echo "</pre>";*/
