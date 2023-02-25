<?php
    session_start();
    if($_POST['submit']=="adicionar nome"){
        if(empty($_SESSION["list"])){
            $_SESSION["list"] = [];
        }
        array_push($_SESSION["list"],$_POST['nome']);
        header('Location: index.php');
    }

    if($_POST['submit']=="enviar"){
        if(empty($_SESSION["list"])){
            $em = "Nenhum nome foi inserido!";
	        header("Location: index.php?error=$em");
        } else {
            if(empty($_SESSION["list"])){
                $_SESSION["list"] = [];
            }
            array_push($_SESSION["list"],$_POST['nome']);
            $c = 0;
            foreach($_SESSION["list"] as $nomes){
                $test = substr($nomes,1,1);
                if($test=="a"){
                    $c++;
                }
            }
            $message = "Tem " . $c . " nomes que começam com a letra a!";
            unset($_SESSION["list"]);
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
        <h1></h1>
    </header>
    <div class="caixa">
        <p><?php echo $message; ?></p>
    </div>
    <footer>
        <p>feito por <a href="https://github.com/wulkss" target="_blank">wulkss</a></p>
    </footer>
</body>
</html>