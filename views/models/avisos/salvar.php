<?php

require_once "config.php";

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

// arquivo com um numero aleatorio para nao ter imagens com o tempo nome de arquivo
$pname = rand(1000, 10000)."-".$_FILES["image"]["name"];

// nome de arquivo temporario pra guardar o arquivo
$tname = $_FILES["image"]["tmp_name"];

// pata de diretório da imagem
$uploads_dir = './images';

// movendo o arquivo de upload pra pasta
move_uploaded_file($tname, $uploads_dir.'/'.$pname);

$sql = "insert into tb_avisos (titulo, conteudo, image) values (:titulo, :conteudo, :pname)";

$stm = $pdo->prepare($sql);

$stm->execute(
    [':titulo' => $titulo, ':conteudo' => $conteudo, ':pname' => $pname]
);

// echo "objetivo cadastrado com sucesso!!<br/>";
// echo "<a href='./index.php'>Voltar</a>";

include '../../layout/aprove.php';

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
                        <p class="card-text">Aviso criado com Sucesso</p>
                        <a type="button" href="./index.php" class="btn btn-success">Feito!</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>

</html>