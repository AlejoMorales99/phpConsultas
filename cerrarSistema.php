<?php

session_start(); //activa las variables de sesion
session_destroy(); //destruye el arreglo de variables de session
session_unset(); //crea el arreglo vacio

header("location:index.php");
