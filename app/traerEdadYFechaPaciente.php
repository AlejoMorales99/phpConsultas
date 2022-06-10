<?php

require_once 'bd.php';


$fecha = new DateTime(date("y-m-d"));


$idCliente = $_POST["idCliente"];




if($_POST["presionAlta"] == "" || $_POST["presionBaja"] =="" ){
    
    $sql = "SELECT * FROM paciente where id_paciente  = ? ";
    $sentencia = $pdo->prepare($sql);   //Prepara la consulta
    $sentencia->execute([$idCliente]);  //Ejecuta la sentencia SQL
    $resultado = $sentencia->fetch(PDO::FETCH_OBJ);

    $nacimiento = new DateTime($resultado->fechaNacePaciente);

    $calcularEdad = $fecha->diff($nacimiento);
    
    header("location:../frmRegistrarConsultaMedica.php");


}else{






}




?>