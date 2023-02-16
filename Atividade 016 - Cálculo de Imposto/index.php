<?php

if (isset($_GET['error'])){
        echo '<script>';
		echo 'alert("'.$_GET['error'].'");';
        echo '</script>';
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rapaz</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Sistema para cálculo do imposto de veículos</h1>
    </header>
    <div class="form">
        <form action="imposto.php" method="post">
            <div class="inserir">
                <label for="nome" style="margin-top: 0 !important;">nome:</label>
                <input type="text" name="nome" id="nome" required>
                <label for="preco">preço do carro:</label>
                <input type="number" name="preco" id="preco" required>
            </div>
            <input type="submit" value="enviar">
        </form>
    </div>
    <footer>
        <p>feito por <a href="https://github.com/wulkss" target="_blank">wulkss</a></p>
    </footer>
</body>
</html>