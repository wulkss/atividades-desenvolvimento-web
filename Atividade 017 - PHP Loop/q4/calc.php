<?php
    
    if(isset($_POST['mes'])){
        $mes = $_POST['mes'];
        $num = 0;

        switch($mes){
            case "janeiro":
                $num = 1;
            break;

            case "fevereiro":
                $num = 2;
            break;

            case "março":
                $num = 3;
            break;

            case "abril":
                $num = 4;
            break;

            case "maio":
                $num = 5;
            break;

            case "junho":
                $num = 6;
            break;

            case "julho":
                $num = 7;
            break;

            case "agosto":
                $num = 8;
            break;

            case "setembro":
                $num = 9;
            break;

            case "outubro":
                $num = 10;
            break;

            case "novembro":
                $num = 11;
            break;

            case "dezembro":
                $num = 12;
            break;
        }

        if($num != 0){
            $message = ucfirst($mes) . " é o mês " . $num . "!";
        } else {
            $message = "O mês informado é inválido!";
        }
    } else {
        $message = "O mês não foi informado!";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rapaz</title>
    <link rel="icon" type="image/png" href="https://fv9-3.failiem.lv/thumb_show.php?i=qhb6s7n6f&view"/>
    <link rel="stylesheet" href="css/stylephp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Sistema que vê a equivalência dos meses</h1>
    </header>
    <div class="caixa">
        <p><?php echo $message; ?></p>
    </div>
    <footer>
        <p>feito por <a href="https://github.com/wulkss" target="_blank">wulkss</a></p>
    </footer>
</body>
</html>