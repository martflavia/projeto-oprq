<?php

require_once "config.php";

$id = $_GET['id'];
$sql = "delete from tb_objetivos where id = :idObjetivo";

$stm = $pdo->prepare($sql);

$stm->execute([':idObjetivo' => $id]);

echo "Objetivo apagado com sucesso<br/>";
echo "<a href='./index.php'>Voltar</a>";

?>