<?php
include_once('conexaoArd.php');

$texto = $_GET['texto'];
$data = date("Y-m-d");

$query = "INSERT INTO log(texto, idDispositivo, verificado, data_inclusao) VALUES (".$conn->quote($texto).", 1, 0, ".$conn->quote($data).")";

$smtp = $conn->prepare($query);
$smtp->execute();
print_r("Inserido");

?>