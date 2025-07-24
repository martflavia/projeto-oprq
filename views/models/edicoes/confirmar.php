<?php

require_once "config.php";

$id = $_GET['id'];
$sql = "select * from tb_supermercado where id = :idSupermercado";

$stm = $pdo->prepare($sql);

$stm->execute([':idSupermercado' => $id]);

$supermercado = $stm->fetch(PDO::FETCH_ASSOC);

echo "ID:" .$supermercado["id"]."<br/>";
echo "Nome:" .$supermercado["nome"]."<br/>";
echo "CNPJ:" .$supermercado["cnpj"]."<br/>";
echo "Pagamentos Aceitos:" .$supermercado["pagamentos_aceitos"]."<br/>";

echo "<br/>";
    
echo "<a href='/lista2/remover.php?id=". $id ."'>SIM</a>";
echo "<br/>";
echo "<a href='/lista2/listar.php'>NAO</a>";

?>