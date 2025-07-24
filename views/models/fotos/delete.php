<?php

require_once "config.php";

$id = $_GET['id'];
$sql = "delete from tb_fotos where id = :idFoto";

$stm = $pdo->prepare($sql);

$stm->execute([':idFoto' => $id]);

echo "Foto apagada com sucesso<br/>";
echo "<a href='./index.php'>Voltar</a>";

?>