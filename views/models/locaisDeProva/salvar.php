<?php

    require_once "config.php";

    $cidade = $_POST['cidade'];
    $escola = $_POST['escola'];
    $localizacao = $_POST['localizacao'];
    $dataProva = $_POST['dataProva'];

    $sql = "insert into tb_locaisDeProva (cidade, escola, localizacao, dataProva) values (:cidade, :escola, :localizacao, :dataProva)";

    $stm = $pdo->prepare($sql);

    $stm->execute(
        [':cidade' => $cidade, ':escola' => $escola, ':localizacao' => $localizacao, ':dataProva' => $dataProva]
    );

    // echo "data de prova cadastrado com sucesso!!<br/>";
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
                        <p class="card-text">Objetivo editado com Sucesso</p>
                        <a type="button" href="./index.php" class="btn btn-success">Feito!</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>

</html>