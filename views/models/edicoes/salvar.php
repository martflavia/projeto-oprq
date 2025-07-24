<?php

    require_once "config.php";

    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $pagamentos_aceitos = $_POST['pagamentos_aceitos'];

    $sql = "insert into tb_supermercado (nome, cnpj, pagamentos_aceitos) values (:nome, :cnpj, :pagamentos_aceitos)";

    $stm = $pdo->prepare($sql);

    $stm->execute(
        [':nome' => $nome, ':cnpj' => $cnpj, ':pagamentos_aceitos' => $pagamentos_aceitos]
    );

    echo "Supermercado cadastrado com sucesso!!<br/>";
    echo "<a href='/lista2/listar.php'>Voltar</a>";

?>