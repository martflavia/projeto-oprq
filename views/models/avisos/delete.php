<?php

require_once "config.php";

$id = $_GET['id'];
$sql = "delete from tb_avisos where id = :idAviso";

$stm = $pdo->prepare($sql);

$stm->execute([':idAviso' => $id]);

// echo "Objetivo apagado com sucesso<br/>";
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
                        <p class="card-text">Aviso apagado com Sucesso</p>
                        <a type="button" href="./index.php" class="btn btn-success">Feito!</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>

</html>