<?php

require_once 'bd.php';


$fechaConsulta = $_POST["FechaConsulta"];
$idMedico = $_POST["idMedico"];
$idPaciente = $_POST["idCliente"];
$diabetes = $_POST["diabetes"];
$colesterol = $_POST["colesterol"];
$hipertencion = $_POST["hipertencion"];
$otraCondicion = $_POST["otraCondicion"];
$presionAlta = $_POST["presionAlta"];
$presionBaja = $_POST["presionBaja"];
$saturacion = $_POST["saturacion"];
$reportePaciente = $_POST["reportePaciente"];
$reporteMedico = $_POST["reporteMedico"];


$sql = "INSERT INTO consulta
(diabetico,hipertenso,colesterol,otraCondicionPrevia,fechaConsulta,presionAlta,presionBaja,saturacionOxigeno,motivoPaciente,diagnosticoMedico,fk_idMedico,fk_idPaciente) values
(?,?,?,?,?,?,?,?,?,?,?,?) ";
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute([$diabetes,$hipertencion,$colesterol,$otraCondicion,$fechaConsulta,$presionAlta,$presionBaja,$saturacion,$reportePaciente,$reporteMedico,$idMedico,$idPaciente]);  //Ejecuta la sentencia SQL

if($sentencia->rowCount()>0){
  
    

    $arrayName = array('tipo' => "success", "mensaje" => "operacion exitosa");

    echo json_encode($arrayName);
  
  }



?>