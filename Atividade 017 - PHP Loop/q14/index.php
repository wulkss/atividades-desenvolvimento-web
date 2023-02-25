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
        <h1>Sistema que vê se a pessoa está apta para o alistamento obrigatório</h1>
    </header>
    <div class="form">
        <form action="calc.php" method="post">
            <div class="inserir">
                <label style="margin-top: 0 !important;">genero:</label>
                <div>
                    <div>
                        <input type="radio" name="gen" value="m" id="mas" required>
                        <label for="mas">masculino</label>
                    </div>
                    <div>
                        <input type="radio" name="gen" value="f" id="fem" required>
                        <label for="fem">feminino</label>
                    </div>
                </div>
                <label for="num">insira a idade:</label>
                <input type="number" name="num" id="num" required>
            </div>
            <input type="submit" value="enviar">
        </form>
    </div>
    <footer>
        <p>feito por <a href="https://github.com/wulkss" target="_blank">wulkss</a></p>
    </footer>
</body>
</html>