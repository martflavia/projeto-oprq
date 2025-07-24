<?php

    require_once "config.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $pagamentos_aceitos = $_POST['pagamentos_aceitos'];
    
    $sql = "update tb_supermercado set nome = :nome, cnpj = :cnpj, pagamentos_aceitos = :pagamentos_aceitos where id= :id";

    $stm = $pdo->prepare($sql);

    $stm->execute(
        [':nome' => $nome, ':cnpj' => $cnpj, ':pagamentos_aceitos' => $pagamentos_aceitos, ':id' => $id]
    );

    echo "Supermercado atualizado com sucesso!!<br/>";
    echo "<a href='/lista2/listar.php'>Voltar</a>";

?>