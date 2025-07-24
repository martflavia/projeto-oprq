<?php

    require_once "config.php";

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    
    $sql = "update tb_fotos set titulo = :titulo, conteudo = :conteudo where id= :id";

    $stm = $pdo->prepare($sql);

    $stm->execute(
        [':titulo' => $titulo, ':conteudo' => $conteudo, ':id' => $id]
    );

    echo "objetivos atualizado com sucesso!!<br/>";
    echo "<a href='./index.php'>Voltar</a>";

?>