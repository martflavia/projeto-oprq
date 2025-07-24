<?php

require_once "config.php";

$user = $_POST['user'];
$senha = $_POST['senha'];

$sql = "select * from tb_adm";

$statement = $pdo->query($sql);

$adms = $statement->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["usuario"] = "usr";


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
                <?php foreach ($adms as $adm) {
                if ($adm['user'] == $user && $adm['senha'] == $senha) {
                echo '<div class="card" style="width: 30%;">
                    <center>
                        <img src="../../../assets/img/verifi.gif" alt="" style="width: 40%;">
                    </center>
                    <div class="card-body">
                        <p class="card-text">Login como ADM Concluído</p>
                        <a type="button" href="../home/index.php" class="btn btn-success">Feito!</a>
                    </div>
                </div>';

                $_SESSION["usuario"] = "adm";

                } else {
                echo "<script>
                    alert('Usuário ou senha incorretos')
                </script>";
                echo "<a href='login.php'>Voltar</a>";
                }
                } ?>
                
            </center>
        </div>
    </div>
</body>

</html>