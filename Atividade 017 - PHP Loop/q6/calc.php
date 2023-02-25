<?php
    if(isset($_POST['alt']) && isset($_POST['peso'])){
        $imc = $_POST['peso'] / pow($_POST['alt'],2);

        if ($imc < 22){
            $sit = "baixo peso";
        } else {
            if ($imc <= 27){
                $sit = "o peso normal";
            } else {
                if ($imc <= 30){
                    $sit = "sobrepeso";
                } else {
                    $sit = "obesidade";
                }
            }
        }

        $message = "A pessoa tem o IMC " . number_format($imc, 2, ',', '.') . " e está com " . $sit;
    } else {
        $message = "A altura ou o peso não foi informado!";
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
        <h1>Calculador de imc</h1>
    </header>
    <div class="caixa">
        <p><?php echo $message; ?></p>
    </div>
    <footer>
        <p>feito por <a href="https://github.com/wulkss" target="_blank">wulkss</a></p>
    </footer>
</body>
</html>