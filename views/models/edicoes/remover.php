<?php

require_once "config.php";

$id = $_GET['id'];
$sql = "delete from tb_supermercado where id = :idSupermercado";

$stm = $pdo->prepare($sql);

$stm->execute([':idSupermercado' => $id]);

echo "Supermercado apagado com sucesso<br/>";
echo "<a href='/lista2/listar.php'>Voltar</a>";

?>