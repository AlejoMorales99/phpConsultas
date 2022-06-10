<?php

require_once 'bd.php';


$sql = "SELECT * FROM paciente";
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute();  //Ejecuta la sentencia SQL
$resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);


?>