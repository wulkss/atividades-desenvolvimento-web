<?php
    if(isset($_POST['name'])){
        $em = "Nenhum número foi inserido!";
	    header("Location: index.php?error=$em");
    } else {
        $num = $_POST['num'];
        $gen = 35;

        if($_POST['gen']=="m"){
            $gen = 45;
        }
        
        if(18<=$num && $num<=$gen){
            $message = "Apto para o serviço militar obrigatório";
        } else {
            $message = "Inapto para o serviço militar obrigatório";
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
        <h1>Sistema que vê se a pessoa está apta para o alistamento obrigatório</h1>
    </header>
    <div class="caixa">
        <p><?php echo $message; ?></p>
    </div>
    <footer>
        <p>feito por <a href="https://github.com/wulkss" target="_blank">wulkss</a></p>
    </footer>
</body>
</html>