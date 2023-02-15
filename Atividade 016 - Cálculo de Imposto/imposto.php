<?php

error_reporting(0);

$nome = $_POST['nome'];
$preco = $_POST['preco'];

if(isset($nome) && isset($preco)){
$imp = $preco*.04;
$taxa = $imp*.02;
$imptot = $imp+$taxa;
} else {
    $em = "E-mail ou senha não preenchido!";
	header("Location: index.php?error=$em");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rapaz</title>
    <link rel="stylesheet" href="css/stylephp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Sistema para cálculo do imposto de veículos</h1>
    </header>
    <div class="caixa">
        <p> <?php echo 'Olá, <b>' . $nome . '</b> O valor do IPVA do seu veículo para 2023 é de <b>R$ ' . number_format($imptot, 2, ',','.') . '</b>. Este valor corresponde a 4% do valor do seu veículo <b>R$ ' . number_format($imp, 2, ',','.') . '</b> + uma taxa de 2% <b>R$ ' . number_format($taxa, 2, ',','.') . '</b> de emissão de boleto sobre o valor do imposto.'; ?> </p>
    </div>
    <footer>
        <p>feito por <a href="https://github.com/wulkss" target="_blank">wulkss</a></p>
    </footer>
</body>
</html>