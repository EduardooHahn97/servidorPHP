<?php
include_once('conexao.php');

$sql = 'UPDATE log SET verificado = 1 WHERE idLog = ?';

$stmt= $conn->prepare($sql);
$stmt->execute([$_GET['idLog']]);

?>