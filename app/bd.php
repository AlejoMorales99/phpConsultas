<?php
//conexion a la BD de la forma clásica
 // activa la configuracion de arreglos para almacenar las sesiones
//Usuario y clave de mysql
$usuario = 'root';
$password = '';

try{
    //Creamos el conector instanciando la clase PDO
    $pdo = new PDO('mysql:host=localhost;dbname=hospisoft',$usuario,$password);   //Usamos la clase PDO de php con el conector MYSQL
    /* var_dump($pdo);
    echo '<br>';
    echo 'Conexión exitosa'; */

}catch(PDOException $error){
    echo 'Ha ocurrido un error en la conexión'; //Para el usuario
    echo 'El error es: '.$error->getMessage();  //para el programador
}