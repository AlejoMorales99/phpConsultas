<?php
require_once 'bd.php'; //incluyo la cadena de conexión PHP

//Hacer el proceso de request - response

$sql = 'SELECT * FROM medico';
$sentencia = $pdo->prepare($sql);   //Prepara la consulta

$sentencia->execute();  //Ejecuta la sentencia SQL
$resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);//Almacena el  resultado en un formato objeto
/* var_dump($resultado);
echo '<pre>';
print_r($resultado);
echo '</pre>'; */

