<?php if (isset($_GET['error'])){
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
    <link rel="icon" type="image/png" href="https://fv9-3.failiem.lv/thumb_show.php?i=qhb6s7n6f&view"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Calculadora de temperatura</h1>
    </header>
    <div class="form">
        <form action="calc.php" method="post">
            <div class="inserir">
                <select id="temp" name="tipo">
                        <option value="cel">Celsius (C) para Fahrenheit (F)</option>
                        <option value="fah">Fahrenheit (F) para Celsius (C)</option>
                </select>
                <label for="temp" >Insira a temperatura:</label>
                <input type="number" name="temp" id="temp" step="0.01" required>
            </div>
            <input type="submit" value="enviar">
        </form>
    </div>
    <footer>
        <p>feito por <a href="https://github.com/wulkss" target="_blank">wulkss</a></p>
    </footer>
</body>
</html>