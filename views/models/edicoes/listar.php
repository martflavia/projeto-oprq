<?php
    require_once "config.php";

    $sql = "select * from tb_supermercado";

    $statement = $pdo->query($sql);

    $mercados = $statement->fetchAll(PDO::FETCH_ASSOC);

	echo "<a href = '/lista2/form.php'>Novo</a>";

    echo "<table border='1px'>
	<th>Nome</th>
	<th>CNPJ</th>
	<th>Pagamento Aceito</th>
	<th>Ações</th>";

	foreach ($mercados as $mercado) {
		echo "<tr><td>";
		echo $mercado["nome"];
		echo "</td><td>";
		echo $mercado["cnpj"];
		echo "</td><td>";
		echo $mercado["pagamentos_aceitos"];
		echo "</td><td>";
		echo "<a href='/lista2/editar_form.php?id=" . $mercado["id"] . "' style = 'padding-right: 4px'>Editar</a>";
		echo "<a href='/lista2/confirmar.php?id=" . $mercado["id"] . "' >/Remover</a>";
		echo "</td>"; 
	}
	echo "</tr></table>";

	//modificado
?>