<?php
    $nnome=$_POST["n_nome"];
    $nemail=$_POST["n_email"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rapaz</title>
    <link rel="stylesheet" href="../css/stylephp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Aguarde!</h1>
    <p><?php echo "Olá $nnome, em pouco tempo entraremos em contato com você pelo email $nemail ." ?></p>
</body>
</html>