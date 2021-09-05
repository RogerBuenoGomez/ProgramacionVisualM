<?php
// Conexión
$servidor = 'localhost';
$usuario = 'root';
$password = '1234';
$basededatos = 'blog';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos) or die("error en la conexión");;
//mysqli_connect($host, $user, $password, $database, $port, $socket)

mysqli_query($db, "SET NAMES 'utf8'");

// mysqli_query nos sirve para ejecutar una consulta.

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}