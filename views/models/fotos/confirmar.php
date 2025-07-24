<?php

require_once "config.php";

$id = $_GET['id'];
$sql = "select * from tb_fotos where id = :idFotos";

$stm = $pdo->prepare($sql);

$stm->execute([':idFotos' => $id]);

$foto = $stm->fetch(PDO::FETCH_ASSOC);

echo "ID:" .$foto["id"]."<br/>";
echo "Nome:" .$foto["nome"]."<br/>";
echo "CNPJ:" .$foto["cnpj"]."<br/>";
echo "Pagamentos Aceitos:" .$foto["pagamentos_aceitos"]."<br/>";

echo "<br/>";
    
echo "<a href='/lista2/remover.php?id=". $id ."'>SIM</a>";
echo "<br/>";
echo "<a href='/lista2/listar.php'>NAO</a>";

?>