<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temperaturas</title>
</head>
<body>
<?php 
$fh = $_POST['fh'];
$ftoc = ($fh - 32)*5/9;
$ftok = ($fh - 32) * 5/9 + 273.15; 
?>
<h2 class="temperara"><?php echo $fh?>°F</h2>
<h1 class="temperara"><?php echo $ftoc?>°C </h1>
<h2 class="temperara"><?php echo $ftok?>K</h2>
<a href="?pagina=home"><div class="back">Voltar</div></a>
</body>
</html>