<?php
    require_once "config.php";

    $id = $_GET["id"];

    $sql = "select * from tb_supermercado where id = :idSupermercado";

$stm = $pdo->prepare($sql);

$stm->execute([':idSupermercado' => $id]);

$supermercado = $stm->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Supermercado</title>
</head>
<body>
    <h2>Dados do Supermercado:</h2>
    <form action="/lista2/atualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label id="nome" for="nome">Nome: </label>
        <input id="nome" type="text" name="nome" value="<?php echo $supermercado['nome']; ?>">
        <br/><br/>
        <label id="cnpj" for="cnpj">CNPJ: </label>
        <input id="cnpj" type="text" name="cnpj" value="<?php echo $supermercado['cnpj']; ?>">
        <br/><br/>
        <label id="pagamentos_aceitos" for="pagamentos_aceitos">Pagamento Aceito: </label>
        <select name="pagamentos_aceitos" id="pagamentos_aceitos">
            <option value="cartao">Cartão</option>
            <option value="dinheiro">Dinheiro</option>
            <option value="pix">PIX</option>
            <option value="<?php echo $supermercado['pagamentos_aceitos']; ?>"></option>
        </select>
        
        <br/><br/>
        <input type="submit" name="salvar" value="Enviar">
    </form>
</body>
</html>

