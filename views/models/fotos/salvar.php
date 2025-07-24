<?php

    require_once "config.php";

    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    $sql = "insert into tb_fotos (titulo, conteudo) values (:titulo, :conteudo)";

    $stm = $pdo->prepare($sql);

    $stm->execute(
        [':titulo' => $titulo, ':conteudo' => $conteudo]
    );

    echo "foto cadastrado com sucesso!!<br/>";
    echo "<a href='./index.php'>Voltar</a>";

?>