<?php

$nombre = $_REQUEST['nombre'];
$apellido  = $_REQUEST['apellido'];
$genero = $_REQUEST['genero'];
$Estrato = $_REQUEST['estrato'];
$codigo = $_REQUEST['codigo'];
$materias = $_REQUEST['materias'];

$host = "localhost";
$dbname = "registrouni";
$username = "root";
$password = "";

$cnx = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
$sql = "INSERT INTO profesores (nombre, apellido, genero, estrato, codigo, materias) VALUES ('$nombre', '$apellido', '$genero', '$genero', NULL, '$materias')";


$q = $cnx->prepare($sql);

$result = $q->execute();

// if($result){
//     echo "Guardado exitosamente";
// }else{
//     echo "Error creando a $nombre";
// }

?>