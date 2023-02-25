<?php
    if (!isset($_POST['temp'])){
        $em = "Temperatura não informada!";
	    header("Location: index.php?error=$em");
    } else {
        $temp = $_POST['temp'];
        if ($_POST['tipo'] == "cel"){
            $res = $temp*9/5 +32;
            $message = $temp . "°C é equivalente a " . $res . "°F";
        } else {
            $res = ($temp-32)*5/9;
            $message = $temp . "°F é equivalente a " . $res . "°C";
        }
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
    <h1>Calculadora de temperatura</h1>
    </header>
    <div class="caixa">
        <p><?php echo $message; ?></p>
    </div>
    <footer>
        <p>feito por <a href="https://github.com/wulkss" target="_blank">wulkss</a></p>
    </footer>
</body>
</html>