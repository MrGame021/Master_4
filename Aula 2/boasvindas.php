<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>

    <?php # Forma com o PHP --> mais estenso
    echo('<h1>Olá '.$_POST['nome'].'!<h1>');
    ?>

    <h1>Olá <?=$_POST['nome']?>!</h1> <!-- Forma com o igual -> mais compacto -->

    <a href="praticar.php">Voltar</a>
    
    
</body>
</html>