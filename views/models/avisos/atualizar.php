<?php

    require_once "config.php";

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    
    $sql = "update tb_avisos set titulo = :titulo, conteudo = :conteudo where id= :id";

    $stm = $pdo->prepare($sql);

    $stm->execute(
        [':titulo' => $titulo, ':conteudo' => $conteudo, ':id' => $id]
    );

    // echo "objetivos atualizado com sucesso!!<br/>";
    // echo "<a href='./index.php'>Voltar</a>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../layout/head.php'; ?>
</head>

<body>
    <div class="bg-light p-5 rounded">
        <div class="container">
            <center>
                <div class="card" style="width: 30%;">
                    <center>
                        <img src="../../../assets/img/verifi.gif" alt="" style="width: 40%;">
                    </center>
                    <div class="card-body">
                        <p class="card-text">Aviso editado com Sucesso</p>
                        <a type="button" href="./index.php" class="btn btn-success">Feito!</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>

</html>